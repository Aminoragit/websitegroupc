# 메인 페이지 라우팅
import flask
from flask import Flask, request, render_template, Response, send_file

import numpy as np
import pandas as pd

# 텐서
from keras.models import load_model
import tensorflow as tf
from tensorflow.python.keras.backend import set_session

# 머신러닝
from sklearn.model_selection import train_test_split
import seaborn as sns
from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier
from sklearn.tree import export_graphviz
from sklearn.ensemble import RandomForestClassifier
from sklearn import metrics
from sklearn.ensemble import GradientBoostingClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.neural_network import MLPClassifier
from sklearn.decomposition import PCA
from sklearn.preprocessing import StandardScaler
from sklearn.cluster import KMeans
import sklearn.metrics as sm
import mglearn

# 데이터파일 전달을 위한 모듈
from io import StringIO, BytesIO
from werkzeug.utils import secure_filename
import sys
import os

# 시각화를 위한 모듈
from IPython.display import Image
from sklearn.tree import export_graphviz
import pydotplus
import seaborn as sns
import base64
import warnings
warnings.filterwarnings('ignore')
import matplotlib.pyplot as plt
plt.rcParams['font.family'] = 'NanumGothicCoding'
plt.rcParams['axes.unicode_minus'] = False

# import 끝

app = Flask(__name__)

@app.route("/")
@app.route("/index")
def index():
    return render_template('main.html')

@app.route("/keras")
def pre1():
    on = False
    return render_template('keras.html', on = on)

#분석방법1. 케라스를 통한 딥러닝 - 폐수에따른 수질예측
@app.route('/keras', methods=['POST'])
def make_prediction(label = None, on=False):
    
    if request.method == 'POST':
        global pred_df    
        df_all = pd.read_csv('./data/predict_data3.csv', encoding='ANSI')
        le = len(df_all)
                
        try: 
            file = request.files['file']
            filename = secure_filename(file.filename)
            file_path = os.path.join(filename)
            file.save(file_path)
            df = pd.read_csv(file_path)
        except FileNotFoundError:  return render_template('keras.html', label = '파일을 선택해주세요')
        except UnicodeDecodeError:  return render_template('keras.html', label = 'utf-8 파일만 가능합니다.') 
                        
        df_concat = pd.concat([df_all, df])
        a = df_concat.loc[:,'저층수온':]
        mini = a.min()
        maxi = a.max()
        df_concat.loc[:,'저층수온':] = (a-mini)/(maxi-mini)
            
        if len(df) == 1:
            pred_df = pd.DataFrame(df_concat.iloc[le,1:]).T
        else :
            pred_df = df_concat.iloc[le:,1:]

        with deep_learning_graph.as_default():
            set_session(sess)
            try:
                result = deep_learning_model.predict_classes(pred_df)
            except ValueError:  return render_template('keras.html', label = '파일의 변수 갯수를 확인해주세요.')
        df['예측수질']= result +1
        pred_df = df
        label = file_path
        on = True
        return render_template('keras.html', label = label , on = on)

@app.route('/down', methods=['POST'])
def down():
    output_stream = StringIO()
    pred_df.to_csv(output_stream, encoding = 'ANSI', index=False) 
                
    response = Response(
    output_stream.getvalue(), 
    mimetype='text/csv', 
    content_type='application/octet-stream',
        )
    response.headers["Content-Disposition"] = "attachment; filename=predict.csv"
    return response

@app.route('/exdown', methods=['POST'])
def exdown():
    output_stream = StringIO()
    try:
        ex = pd.read_csv('./data/test.csv')
    except NameError : return render_template('keras.html', label = '예측모델을 먼저 사용하세요.')
    ex.to_csv(output_stream,  index=False)
        
    response = Response(
    output_stream.getvalue(), 
    mimetype='text/csv', 
    content_type='text/csv;'
        )
    response.headers["Content-Disposition"] = "attachment; filename=ex_data.csv"
    return response
# 분석1. keras 끝

# 분석2. 랜덤포래스트

@app.route("/r_forest")
def pre_r_forest():
    on = False
   
    return render_template('random_forest.html', on=on)

@app.route('/r_forest', methods=['POST'])
def make_r_forest(on = False, col_1=None , col_2 = None, label = None):
    
    if request.method == 'POST':
        df1 = pd.read_csv('./data/수질+수거량.csv')
        le = len(df1)
        
        try: 
            file = request.files['file']
            filename = secure_filename(file.filename)
            file_path = os.path.join(filename)
            file.save(file_path)
            df = pd.read_csv(file_path)
        except FileNotFoundError:  return render_template('random_forest.html', label = '파일을 선택해주세요')
        except UnicodeDecodeError:  return render_template('random_forest.html', label = 'utf-8 파일만 가능합니다.') 
                
        df_concat = pd.concat([df1,df])       
        a = df_concat.iloc[:,5:]
        mini = a.min()
        maxi = a.max()
        df_concat.iloc[:,5:] = (a - mini)/(maxi-mini) 
        x = df_concat.iloc[:le,5:] 
        y = df_concat.iloc[:le,4]       
        X_train, X_test, y_train, y_test = train_test_split(x, y, stratify=y, random_state=42)
        try:
            
            forest = RandomForestClassifier(n_estimators=100,random_state=2).fit(X_train, y_train)
        except ValueError:  return render_template('random_forest.html', label = '파일의 변수 갯수를 확인해주세요') 
        train = forest.score(X_train, y_train)
        test = forest.score(X_test, y_test)
        
        if len(df) == 1:
            pred_x = pd.DataFrame(df_concat.iloc[le,5:]).T           
        else :
            pred_x = df_concat.iloc[le:,5:]
                     
        predict = forest.predict(pred_x)      
        col1 =  request.form['col1']      
        col2 =  request.form['col2']
        df_g = df1.iloc[:,[4,int(col1),int(col2)]]
        
        try:
            svm = sns.pairplot(df_g, hue='해수수질기준')
        except ValueError:return render_template('random_forest.html', label = '서로 다른 변수를 선택하세요') 
        
        bytesio = BytesIO() 
        svm.savefig(bytesio, format='png')
        bytesio.seek(0)
        img = base64.b64encode(bytesio.getvalue())
        on =True
        return render_template('random_forest.html',  train= train, test= test, predict= predict, on = on, img = img.decode('ascii'), label = label)
        
@app.route('/forest_exdown', methods=['POST'])
def forest_exdown():
    output_stream = StringIO()
    ex = pd.read_csv('./data/test_r_f.csv') 
    ex.to_csv(output_stream,  index=False)
        
    response = Response(
    output_stream.getvalue(), 
    mimetype='text/csv', 
    content_type='text/csv;'
        )
    response.headers["Content-Disposition"] = "attachment; filename=ex_data.csv"
    return response 
    
# 분석3. 디시전트리

@app.route("/tree")
def pre_tree():
    on =False
    down_on = False
    return render_template('tree.html', on = on, down_on = down_on)

@app.route('/tree', methods=['POST'])
def make_tree(on = False, down_on = False):
    
    if request.method == 'POST':
        data = pd.read_csv('./data/수질.수거량.csv')
                
        X = data.iloc[:,5:]
        y = data.iloc[:,4]
        depth = request.form['depth']
        X_train , X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=0)
       
        
        data_tree = DecisionTreeClassifier(criterion='gini', max_depth=int(depth), random_state=0)
        try:
            data_tree.fit(X_train, y_train)
        except ValueError:  return render_template('tree.html', label = 'depth는 0보다 커야함 ') 
        train_score = data_tree.score(X_train, y_train)
        test_score = data_tree.score(X_test, y_test)
        dot_data = export_graphviz(data_tree, out_file=None, filled=True, rounded=True, special_characters=True)
        global tree_graph
        graph = pydotplus.graph_from_dot_data(dot_data)
        tree_graph = graph
                
        bytesio = BytesIO() 
        
        graph.write_png(bytesio)
        bytesio.seek(0)
        img = base64.b64encode(bytesio.getvalue())
        
        
        depth = int(depth)
        if (depth <7)&(depth>0):
            
            on =True
        elif depth <= 0:
            on = False
        elif depth >=7:
            on = False
            down_on = True
        
        return render_template('tree.html',train=train_score,test=test_score, img = img.decode('ascii'), on = on , depth = depth , down_on=down_on)

@app.route('/gr_down', methods=['POST'])
def gr_down():
    output_stream = BytesIO()
    tree_graph.write_png(output_stream)         
    response = Response(
    output_stream.getvalue(), 
    mimetype='img/png', 
    content_type='img/png; '
        )
    response.headers["Content-Disposition"] = "attachment; filename=ex_data.png"
    return response
# 분석4. 그래디언트

@app.route("/Gradient")
def pre_Gradient():
    on =False
    return render_template('Gradient.html', on = on)

@app.route('/Gradient', methods=['POST'])
def make_Gradient(on = False):
    
    if request.method == 'POST':
        measure = pd.read_csv('./data/수질+수거량_컬럼삭제.csv',engine='python')
        le = len(measure)
        rate = float(request.form['rate'])
        depth = int(request.form['depth'])
        try: 
            file = request.files['file']
            filename = secure_filename(file.filename)
            file_path = os.path.join(filename)
            file.save(file_path)
            df = pd.read_csv(file_path)
        except FileNotFoundError:  return render_template('Gradient.html', label = '파일을 선택해주세요')
        except UnicodeDecodeError:  return render_template('Gradient.html', label = 'utf-8 파일만 가능합니다.') 
        
        measure_data = measure.iloc[:,1:]
        measure_target = measure.iloc[:,0]
        
        X_train, X_test, y_train, y_test=train_test_split(measure_data,measure_target, stratify=measure_target,random_state=30)        
        
        gbrt = GradientBoostingClassifier(random_state=0, learning_rate=rate, max_depth=depth).fit(X_train, y_train)

        train = gbrt.score(X_train, y_train)
        test = gbrt.score(X_test, y_test)

        predict = gbrt.predict(df.iloc[:,1:])
        
        global g_down_df
        df['예측수질'] = predict
        g_down_df = df
        on =True
        return render_template('Gradient.html',train=train,test=test)

@app.route('/gradient_exdown', methods=['POST'])
def gradient_exdown():
    output_stream = StringIO()
    ex = pd.read_csv('./data/수질+수거량_컬럼삭제_concatsample.csv') 
    ex.to_csv(output_stream,  index=False)
        
    response = Response(
    output_stream.getvalue(), 
    mimetype='text/csv', 
    content_type='text/csv;'
        )
    response.headers["Content-Disposition"] = "attachment; filename=ex_data.csv"
    return response  

@app.route('/gradient_down', methods=['POST'])
def gradient_down():
    output_stream = StringIO()
    g_down_df.to_csv(output_stream, encoding = 'ANSI', index=False) 
               
    response = Response(
    output_stream.getvalue(), 
    mimetype='text/csv', 
    content_type='application/octet-stream',
        )
    response.headers["Content-Disposition"] = "attachment; filename=predict.csv"
    return response
# 분석5. KNN 

@app.route("/knn")
def pre_knn():
    on =False
    return render_template('knn.html', on = on)

@app.route('/knn', methods=['POST'])
def make_knn(on = False):
    
    if request.method == 'POST':

        measure = pd.read_csv('./data/수질+수거량_컬럼삭제.csv',engine='python', encoding='utf-8')
        # 데이터 분류
        measure_data = measure.iloc[:,1:]
        measure_target = measure.iloc[:,0]
        measure_data_select = measure_data[['표층DO', '저층DO', '표층Chl-a', '저층Chl-a', '표층DIN', '저층DIN', '표층DIP', '저층DIP', '표층투명도']]
        X_train, X_test, y_train, y_test = train_test_split(measure_data_select, measure_target, random_state=0)
        
        # 학습
        knn = KNeighborsClassifier(n_neighbors=1).fit(X_train, y_train)
        # 
        train_score = knn.score(X_train, y_train)
        test_score = knn.score(X_test, y_test)
        
        a = request.form['num']
        a = int(a)
        on = True
        X_value = np.array([X_train.iloc[a,:].values])
        prediction = knn.predict(X_value)
        real_num = measure_target[a]
        col = X_train.iloc[a]
                
        return render_template('knn.html', train_score = train_score, a=a , on =on,test_score=test_score ,prediction = prediction,real_num = real_num, col = col)

# 분석6. K-MEANS

@app.route("/kmeans")
def pre_kmea():
    on =False
    return render_template('kmeans.html', on = on)

@app.route('/kmeans', methods=['POST'])
def make_kmeans(on = False):
    
    if request.method == 'POST':
        
        measure = pd.read_csv('./data/수질+수거량_컬럼삭제.csv',engine='python', encoding='utf-8')

        measure_data = measure.iloc[:,1:]
        measure_target = measure.iloc[:,0]
        z = measure_target.values -1
        
        X = measure_data
        y = pd.DataFrame(z)
       
        y.columns = ['해수수질기준']
        kmeans = KMeans(n_clusters=5).fit(X)
        acc_score = sm.accuracy_score(y, kmeans.labels_)
        
        
        plt.figure(figsize=(15,7.5))
        colormap = np.array(['red', 'lime', 'black', 'yellow', 'blue']) # 색상배열


        col1 = request.form['col1']
        col2 = request.form['col2']
        plt.subplot(1,2,1) # 1행2열중 1번째 그래프
        plt.scatter(X['{}'.format(str(col1))], X['{}'.format(str(col2))], c=colormap[y.해수수질기준], s=10)
        plt.title("{}, {} 원본".format(str(col1), str(col2)))

        plt.subplot(1,2,2) # 1행2열중 1번째 그래프
        plt.scatter(X['{}'.format(str(col1))], X['{}'.format(str(col2))], c=colormap[kmeans.labels_], s=10)
        plt.title("{}, {}  예측".format(str(col1), str(col2)))

        bytesio = BytesIO() 
        
        plt.savefig(bytesio, dpi = 300)
        bytesio.seek(0)
        img = base64.b64encode(bytesio.getvalue())
        
        on = True
        return render_template('kmeans.html', on = on, img = img.decode('ascii'), score = acc_score)

@app.route('/kmeans_exdown', methods=['POST'])
def _exdown():
    output_stream = StringIO()
    ex = pd.read_csv('./data/수질+수거량_컬럼삭제.csv') 
    ex.to_csv(output_stream,  index=False)
        
    response = Response(
    output_stream.getvalue(), 
    mimetype='text/csv', 
    content_type='text/csv;'
        )
    response.headers["Content-Disposition"] = "attachment; filename=kmeans_data.csv"
    return response       
        
# 텐서 사용을 위한 함수
def init():
    global deep_learning_model
    global deep_learning_graph
    global sess
    sess = tf.Session(config=None)
    deep_learning_graph = tf.get_default_graph()
    set_session(sess)
    deep_learning_model = load_model('./model/predict_data3.h5') # 저장된 모델 로딩
    
if __name__ == '__main__':
    # 모델 로드 
    init()
    # Flask 서비스 스타트
    app.run(debug=True)
    
    app.run(host='192.168.0.192')
    app.run(host = '0.0.0.0',port=8080)
