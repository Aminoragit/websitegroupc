# websitegroupc

#### 요번 프로젝트는 MySQL DB와 연동하여 DB를 사용자가 원하는 항목을 선택하여 조회하고 
#### 이를 다운받을수 있게하는것 + .py파일을 그대로 사용하여 Flask 서버를 열고(django로 변경가능) 해당 서버와 연동하여 머신러닝 딥러닝을 수행하는 프로젝트다.

1) test.py를 cmd로 실행하면 localhost:port형식으로 실행하는데 외부에서도 접근가능하도록 0.0.0.0으로 IP를 설정해주면
외부에서 서버를 연 IP로 접근할수 있다, 홈페이지 제작시에는 사용중인 PC의 IP로 URL를 설정했으니 변경할경우 한꺼번에 변경해주면 쉽게 변경가능하다.

2) 프로젝트에 사용 : Python, JS, CSS, HTML, PHP, MySQL, Excel, sql문법, photoshop ,Oracle(DB설정시 사용)이 사용되었다.

3) 원래는 머신러닝 부분을 미리 학습시킨 model을 JSON형식으로 변경하고 이를 JS로 연동하려고 했는데, ## `.py파일을 그대로 사용하는 방법은 없을까`라는 
생각을 하여 php도 공부하게 되었다. 

안타깝게도, github에서 제공하는 홈페이지는 php와 같은 동적 페이지를 만들수는 없어서 dothome의 무료 호스팅을 통해 홈페이지를 만들었다.

git홈페이지와 별도로 dothome에서도 홈페이지를 구축하였다. 
각 사이트는 동일하지만 속도면에서는 dothome 홈페이지가 훨씬 빠르다.

https://aminoragit.github.io/websitegroupc/  

http://groupc.dothome.co.kr/index.html






#### 서버 여는법

flask 폴더를 보면 test.py가 있다, flask 폴더에서 cmd를 열어주고
##### python test.py를 실행해주면 127.0.0.1 - - [09/Jun/2020 17:11:32] "[35m[1mGET / HTTP/1.1[0m" 500 -]
와 같이 뜨는데 이때 인터넷 주소로 `localhost:5000/머신러닝명` 을 쳐주면 해당 머신러닝 페이지로 넘어간다.
머신러닝명: tree, kmeans,knn, Gradient, r_forest, keras

ex ) localhost:5000/tree
 

외부사이트에서 접속할경우 cmd->ipconfig->ipv4의 주소로 쳐주면된다.
ex) 192.168.0.231 <== ipv4
    192.168.0.231:5000/tree
로 실행하면 외부에서도 접속이 가능하지만 서버를 열어놔야지만 가능하다, Django로 이식할 예정
