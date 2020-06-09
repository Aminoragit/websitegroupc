from flask import Flask, render_template, request, jsonify
import warnings
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt

from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier
import pymysql.cursors

# mysql ##########################

app = Flask(__name__)


@app.route('/')
@app.route('/can.php')
def index():
    return render_template('can.php')

@app.route('/train')
def training():
	c = request.args.get('c', 0, type=float)
	print c+c
	# measure = pd.read_csv('C:/Anaconda3/python/csvdata/trashdata.csv',engine='python', encoding='utf-8')

	# measure_data = measure.iloc[:,5:]
	# measure_data = measure_data.drop(['구군'], 1)
	# measure_data = measure_data.drop(['Ds'], 1)

	# measure_target = measure.iloc[:,4]



	# X_train, X_test, y_train, y_test = train_test_split(
	#     measure_data, measure_target, stratify=measure_target, random_state=42)

	# tree = DecisionTreeClassifier(random_state=0)
	# tree.fit(X_train, y_train)

	# # 사전가지치기
	

	# tree = DecisionTreeClassifier(random_state=0, max_depth=c)
	# tree.fit(X_train, y_train)

	# resulttrain=round(tree.score(X_train, y_train),3)
	# resulttest=round(tree.score(X_test, y_test),3)
	# resultdata={'resulttrain':resulttrain,'resulttest':resulttest}
	# print('훈련세트점수: {:.3f}'.format(resulttrain))
	# print('검증세트점수: {:.3f}'.format(resulttest))


	# return jsonify(resultdata=resultdata)
	return jsonify(resultdata=c)
	
if __name__ == "__main__":
    app.run()