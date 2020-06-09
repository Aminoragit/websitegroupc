<!DOCTYPE html>
<!-- saved from url=(0056)file:///C:/Users/TJOEUN-JR/Desktop/machine_learning.html -->
<html lang="ko-KR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>BAWS(Bigdata Analytics Web Service)</title>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=0.5, maximum-scale=1.0">
<link rel="shortcut icon" href="./index_files/image/icon.jpg">
<link rel="stylesheet" type="text/css" href="./index_files/css/common.css" media="all">
<link rel="stylesheet" type="text/css" href="./index_files/css/font-awesome.min.css" media="all">
<link rel="stylesheet" type="text/css" href="./index_files/css/common-ui.css" media="all">

<link rel="stylesheet" type="text/css" href="./index_files/css/zTreeStyle.css">
<link rel="stylesheet" type="text/css" href="./index_files/css/sub.css" media="all">
<link rel="stylesheet" type="text/css" href="./index_files/css/main.css" media="all">
<link rel="stylesheet" type="text/css" href="./index_files/css/layout.css" media="all">
<script type="text/javascript" src="./index_files/js/jquery-2.1.0.min.js"></script>

<script type="text/javascript" src="./index_files/js/common.js"></script>
<script type="text/javascript" src="./index_files/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="./index_files/js/TweenMax.min.js"></script>
<script type="text/javascript" src="./index_files/js/browser.js"></script>
<script type="text/javascript" src="./index_files/js/menu.js"></script>
<script type="text/javascript" src="./index_files/js/messages.js"></script>
<script type="text/javascript" src="./index_files/js/gdsUtil.js"></script>
<script type="text/javascript" src="./index_files/js/custom.js"></script>
<script type="text/javascript" src="./index_files/js/jquery.mCustomScrollbar.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
<script type="text/javascript" src="./index_files/js/jquery.ztree.all-3.5.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style type="text/css">
  .bsearch{ display: table;
    border-collapse: separate;
    box-sizing: border-box;
    border-spacing: 2px;
    border-color: grey;
}

</style>
<script>
  $(document).ready(function() {
    $('#mytableresult').DataTable({
      bAutoWidth: false, //자동너비
        searching: false, 
        scrollX: true
    });
} );
</script>
<style> /*버튼스타일*/
  .btncsv {
    background-color: DodgerBlue;
    border: none;
    color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
  }


  .btncsv:hover {
    background-color: RoyalBlue;
  }
</style>
<script> //범위지정용값으로 php에서는 $min,$max를 사용한다. $amount는 화면상의 표시값
  jQuery($ => {
    let $amount = $('#amount'),
    $min = $('#min'),
      $max = $('#max');

    let $slider = $("#slider-range").slider({ //slider의 구성요소 설정
        range: true,
        min: -2,
        max: 32,
        values: [-2, 32],
        slide: function(event, ui) {
          $amount.val(`${ui.values[0]} - ${ui.values[1]}`);
            $min.val(ui.values[0]);
          $max.val(ui.values[1]);
        }
    });

    $amount.val($slider.slider("values", 0) + "  ~  " + $slider.slider("values", 1));//표시되는 값
  });
</script>
<script>
  jQuery(function($){
  $('.table').footable();
});
</script>

  <script type="text/javascript"> //html상에 표시된 테이블 다운로드 받기 table id="mytableresult"
    class ToCSV {
        constructor() {
        // CSV 버튼에 이벤트 등록
        document.querySelector('#csvDownloadButton').addEventListener('click', e => {
            e.preventDefault()
            this.getCSV('mycsv.csv')
        })
    }

    downloadCSV(csv, filename) {
        let csvFile;
        let downloadLink;
        const BOM = "\uFEFF";
    csv = BOM + csv;
        // CSV 파일을 위한 Blob 만들기
        csvFile = new Blob([csv], {type: "text/csv"})
        // Download link를 위한 a 엘리먼스 생성
        downloadLink = document.createElement("a")
        // 다운받을 csv 파일 이름 지정하기
        downloadLink.download = filename;
        // 위에서 만든 blob과 링크를 연결
        downloadLink.href = window.URL.createObjectURL(csvFile)
        // 링크가 눈에 보일 필요는 없으니 숨겨줍시다.
        downloadLink.style.display = "none"
        // HTML 가장 아래 부분에 링크를 붙여줍시다.
        document.body.appendChild(downloadLink)

        // 클릭 이벤트를 발생시켜 실제로 브라우저가 '다운로드'하도록 만들어줍시다.
        downloadLink.click()
    }

    getCSV(filename) {
        // csv를 담기 위한 빈 Array를 만듭시다.
        const csv = []
        const rows = document.querySelectorAll("#mytableresult tr")

        for (let i = 0; i < rows.length; i++) {
            const row = [], cols = rows[i].querySelectorAll("td, th")

            for (let j = 0; j < cols.length; j++)
                row.push(cols[j].innerText)

            csv.push(row.join(","))
        }

        // Download CSV
        this.downloadCSV(csv.join("\n"), filename)
    }
}

document.addEventListener('DOMContentLoaded', e => {
    new ToCSV()
})
</script>
</head>
<body>
  <!--AOS 효과를 사용하기 위한 script head에 작성하면 동작하지 않으니 주의 할것-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
<div id="mwrap">
  <div class="top_area">
    <dl class="logo_box">
      <dt>
        <h1 class="logo">
          <a href="https://aminoragit.github.io/websitegroupc/index.html" class="gov_logo1"><img src="./index_files/image/icon.jpg" alt="C조 홈페이지" width="50" height="50" style="width: 30px; height: 30px;"></a>
        </h1>
      </dt>
    </dl>
  </div>
</div>  

<script type="text/javascript">
  var moveURLFlag = false;
  var moveURL = '';
  $(document).ready(function () {
    changeFontSize();
    $("form").each(function(){
      addFontSizeToFormOnsubmit($(this).attr("id"));
  }); 
  var GDSsessionExpireTime;});
</script>

<!-- samenu1의 ul .has-child 마우스 올려놓을때 메뉴확장 --><!---->
<script type="text/javascript">
  $(document).ready(function () {
    $(".sitemap-d2 li").mouseover(function(){
    $(this).find(".sitemap-d3").show();
    $(this).addClass("on");
    });
    
    $(".sitemap-d2 li").mouseout(function(){
      $(this).find(".sitemap-d3").hide();
      $(this).removeClass("on");
    }); 
  });
</script>

  
<!-- header 부분-->
<div id="header" class="main-header">
  <div class="mheader_wrap" style="padding-top: 50px;height: 200px;padding-bottom: 50px;">
  <div class="main_titl1">
    <p style="margin-left: 250px;">더조은 아카데미</p>
    <h3 style="padding-top: 0px; padding-left: 0px; padding-right: 20px;">
      <strong style="padding-top: 0px;">C조</strong> 
      수질 오염 예측모델
    </h3>
  </div>
  </div>
</div>
  
<!--메인 메뉴 부분--> 
<div class="mgnb-wrap">
  <div class="mgnb-areas">
    <ul class="mgnbs" style="width: 1000px; padding-left: 0px;">

      <!--<li>마다 메뉴가 1개씩 있으며 하위 메뉴<dt>와 최하위 메뉴<dd->ul->li>로 구성되어 있다.-->
      <!--메뉴1 예측모델 구상 목표-->
      <li class=""><a href="https://aminoragit.github.io/websitegroupc/html/%EC%98%88%EC%B8%A1%EB%AA%A8%EB%8D%B8%EB%AA%A9%ED%91%9C.html">예측모델 구상 목표</a></li>

      <!--메뉴2 머신러닝 딥러닝-->
      <li class=""><a href="http://아이피/knn">머신러닝 딥러닝</a>
        <div class="mgnbs-div"> 
          <dl>
            <dt class="sub1_1"><p>머신러닝</p></dt>
            <dd>
              <ul>
                <li class="sub1_1_1"><a href="http://아이피/knn">Knn</a></li>
                <li class="sub1_1_2"><a href="http://아이피/kmeans">K-Means</a></li>
                <li class="sub1_1_3"><a href="http://아이피/tree">DecisionTree</a></li>
                <li class="sub1_1_4"><a href="http://아이피/r_forest">R_Forest</a></li>
                <li class="sub1_1_5"><a href="http://아이피/Gradient">Gradient</a></li>
              </ul>                 
            </dd>   
          </dl>
          <dl>
            <dt class="sub1_11"><p>딥러닝[Keras]</p> </dt>
            <dd>
              <ul>
                <li class="sub1_1_1"><a href="http://아이피/keras">Keras(Dense)</a></li>
                
                </ul>                 
            </dd>   
          </dl>
        </div>
      </li>
      
      <!--메뉴3 데이터셋 사이트-->
      <li class=""><a href="https://aminoragit.github.io/websitegroupc/html/DataSetsite.html">데이터셋 사이트</a>
        <div class="mgnbs-div">
          <dl>
            <dt class="sub2_1" style="margin-bottom: 10px;"><p>공공데이터포털 추천</p></dt>
            <dd>
              <ul>
                <li class="sub2_1_1"><a href="https://www.data.go.kr/">공공 데이터 포털</a></li>
                <li class="sub2_1_2"><a href="http://data.seoul.go.kr/">서울 열린 데이터 광장</a></li>
                <li class="sub2_1_3"><a href="https://developers.naver.com/main/">네이버 Open API </a></li>
                <li class="sub2_1_4"><a href="https://developers.kakao.com/">카카오 Open API </a></li>
              </ul>                 
            </dd>
          </dl>
          <dl>
            <dt class="sub2_2" style="margin-bottom: 10px;"><p>기상자료 데이터 포털</p></dt>
            <dd>
              <ul>
                <li class="sub2_2_1"><a href="https://data.kma.go.kr/">기상청 기상자료데이터</a></li>
                <li class="sub2_2_2"><a href="https://bd.kma.go.kr/kma2019/svc/main.do" >날씨마루</a></li>
                </ul>                 
            </dd>
          </dl>
          <dl>
            <dt class="sub2_3" style="margin-bottom: 10px;"><p>공모전/데이터</p></dt>
            <dd>
              <ul>
                <li class="sub2_3_1"><a href="https://dacon.io/">데이콘</a></li>
                <li class="sub2_3_2"><a href="https://www.kaggle.com/">Kaggle</a></li>
                <li class="sub2_3_3"><a href="https://www.wevity.com/">WEVITY</a></li>
                <li class="sub2_3_4"><a href="https://www.all-con.co.kr/page/uni_contest.php">allcontest</a></li>
                <li class="sub2_3_5"><a href="https://www.thinkcontest.com/">씽굿</a></li>
              </ul>                 
            </dd>
          </dl>
        </div>
      </li>
                    
      <!--메뉴4 MySQL-->
      <li class=""><a href="https://aminoragit.github.io/websitegroupc/html/data_download.html">MySQL</a>
        <div class="mgnbs-div">
          <div class="mgnbs-div2">
            <dl>
              <dt class="sub3_1"><p>DB 조회</p></dt>
              <dd>
                <ul>
                  <li class="sub3_2_1"><a href="https://aminoragit.github.io/websitegroupc/html/mysqldo2.php">DB 조회 방법</a></li>
                  <li class="sub3_2_2"><a href="http://groupc.dothome.co.kr/mysqldo2.php">DB 조회 페이지</a></li>
                </ul>                 
              </dd>   
            </dl> 
            <dl style="height: 150px;width: 250px;">
            <dt class="sub3_2" style="margin-bottom: 10px;"><p>전처리 데이터</p></dt>
            <dd>
              <ul>
                <li class="sub3_1_1"><a href="http://groupc.dothome.co.kr/data_download.html">전처리 데이터 다운로드</a></li>
              </ul>                 
            </dd>
            </dl>
          </div>
        </div>
      </li>


      <!-- 메뉴5 C조소개-->
      <li class=""><a href="https://aminoragit.github.io/websitegroupc/index.html">C조에 대하여</a></li></ul>



    <div class="samenu1">
      <a href="#"><img src="./index_files/image/all_btn1.gif" alt="전체 메뉴 보기"></a>
        <div class="mgnbs-div3" style="display: block;width: 1080px;">
          <div class="section-sitemap">

            <!--<ul>마다 samenu의 상위 메뉴를 담당한다.-->
            <ul class="sitemap-d1 s1">
              <!--<li>는 해당 페이지의 base.html로 연결됨-->
              <li><a href="https://aminoragit.github.io/websitegroupc/html/machine_learning.html">머신러닝/딥러닝</a>
                <!-- <ul .sitemap-d2>==하위 메뉴 -->
                <ul class="sitemap-d2">
                  <li class="has-child"><a href="http://아이피/knn">머신러닝</a>
                    <!-- <ul .sitemap-d3>==최하위 메뉴-->
                    <ul class="sitemap-d3">
                      <li><a href="http://아이피//knn">KNN</a></li>
                      <li><a href="http://아이피//kmeans">K-Means</a></li>
                      <li><a href="http://아이피//tree">DecisionTree</a></li>
                      <li><a href="http://아이피//r_forest">R_Forest</a></li>
                      <li><a href="http://아이피//Gradient">Gradient</a></li>
                    </ul>
                  </li>
                </ul>

                <ul class="sitemap-d2">
                  <li class="has-child"><a href="http://아이피/keras">딥러닝</a>
                    <ul class="sitemap-d3">
                      <li><a href="http://아이피//keras">Keras(Dense)</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>


            <ul class="sitemap-d1 s2">
              <li><a href="https://aminoragit.github.io/websitegroupc/html/DataSetsite.html">데이터셋 사이트</a>
                <ul class="sitemap-d2">
                  <li class="has-child"><a href="https://aminoragit.github.io/websitegroupc/html/DataSetsite.html">공공데이터 포털 추천</a>
                    <ul class="sitemap-d3">
                      <li><a href="https://www.data.go.kr/">공공데이터 포털</a></li>
                      <li><a href="http://data.seoul.go.kr/">서울 데이터 센터</a></li>
                      <li><a href="https://developers.naver.com/main/">네이버 Open API</a></li>
                      <li><a href="https://developers.kakao.com/">카카오 Open API</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="sitemap-d2">
                  <li class="has-child"><a href="https://aminoragit.github.io/websitegroupc/html/DataSetsite_1.html">기상자료 데이터 포털</a>
                    <ul class="sitemap-d3">
                      <li><a href="https://data.kma.go.kr/cmmn/main.do">기상청자료개방</a></li>
                      <li><a href="https://bd.kma.go.kr/kma2019/svc/main.do">날씨마루</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="sitemap-d2">
                  <li class="has-child"><a href="https://aminoragit.github.io/websitegroupc/html/DataSetsite_2.html">공모전/데이터</a>
                    <ul class="sitemap-d3">
                      <li><a href="https://dacon.io/">데이콘</a></li>
                      <li><a href="https://www.kaggle.com/">Kaggle</a></li>
                      <li><a href="https://www.wevity.com/">WEVITY</a></li>
                      <li><a href="https://www.all-con.co.kr/">allcontest</a></li>
                      <li><a href="https://www.thinkcontest.com/">씽굿</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>


            <ul class="sitemap-d1 s3">
              <li><a href="http://groupc.dothome.co.kr/mysqldo2.php">MYSQL</a>
                <ul class="sitemap-d2">
                  <li class="has-child"><a href="http://groupc.dothome.co.kr/data_download.html">전처리 데이터</a>
                    <ul class="sitemap-d3">
                      <li><a href="https://aminoragit.github.io/websitegroupc/html/data_download.html">전처리 데이터 다운로드</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="sitemap-d2">
                  <li class="has-child"><a href="http://groupc.dothome.co.kr/mysqldo2.php">DB조회</a>
                    <ul class="sitemap-d3">
                      <li><a href="https://aminoragit.github.io/websitegroupc/html/mysqldo2.php">DB조회 방법</a></li>
                      <li><a href="http://groupc.dothome.co.kr/mysqldo2.php" >DB조회 페이지</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>

            <ul class="sitemap-d1 s4">
              <li><a href="https://aminoragit.github.io/websitegroupc/index.html">C조소개</a>
              </li>
            </ul>
          </div>

        </div>  
      </div>
      <div class="clear">
      </div>
    </div>
  </div>
  <!-- //gnb -->  

<div id="container">
  <div id="sidebar" style="height: 270px;"> 
    <div class="lnb-wrap">
    <div class="lnb-top">
      <h3 class="lnb-title1">
        <span class="data_tit1">MySQL</span>
      </h3>
      <ul id="leftMenuUi" class="lnbs">
        <li class="has-child">              
          <a href="https://aminoragit.github.io/websitegroupc/html/data_download.html"><span>전처리 데이터</span></a>
            <ul class="lnb_list1" style="width: 260px;">
              <li><a href="https://aminoragit.github.io/websitegroupc/html/data_download.html">전처리 데이터 다운로드</a></li>
              
            </ul>
          </li>
        <li class="has-child">              
          <a href="http://groupc.dothome.co.kr/mysqldo2.php"><span>DB 조회</span></a>
            <ul class="lnb_list1">
              <li><a href="https://aminoragit.github.io/websitegroupc/html/mysqldo2.php">DB 조회 방법</a></li>               
              <li><a href="http://groupc.dothome.co.kr/mysqldo2.php">DB 조회페이지</a></li> 
            </ul>
        </li>
      </ul>

    </div>
    </div>
  </div>

  <div id="content" class="sub">
    <div class="content-head" style="margin-left: 250px;">
      <h2>DB 조회방법</h2>
    </div>
  </div>

    <div id="content2" class="sub2" style="
      margin-bottom: 60px;
      margin-left: 20px;
      margin-right: 20px;
      padding-left: 40px;
    ">
      
      <?php
        $db_host = "localhost"; 
        $db_user = "groupc"; 
        $db_passwd = "Cgroup12!";
        $db_name = "groupc"; 
        $conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
        if (mysqli_connect_errno($conn)) {
          echo "데이터베이스 연결 실패: " . mysqli_connect_error();
        } else {
          
        }
      ?>

  <div>
  <h2>사용할 데이터 출력하기</h2>
  </div><br>

  
    
  <form method="POST" action="mysqldo2.php">
            <div id="TB_search">
              <div>
                <div>
                
                    
                    <table border="1" style="width:80%; padding:10px;"data-aos-duration="1500">
                      <th style=" padding:20px;">⊙ 검색조건 : &nbsp;&nbsp;
                        
                <span id="divStartYear">
                          <select name="Year" class="select year" id="year" >
                          <option disabled="" selected="" hidden="">년월</option>
                          <!-- <option value="전체">전체</option> -->
                          <option value="201502">201502</option>
                          <option value="201505">201505</option>
                          <option value="201508">201508</option>
                          <option value="201511">201511</option>
                          <option value="201602">201602</option>
                          <option value="201605">201605</option>
                          <option value="201608">201608</option>
                          <option value="201611">201611</option>
                          <option value="201702">201702</option>
                          <option value="201705">201705</option>
                          <option value="201708">201708</option>
                          <option value="201711">201711</option>
                          <option value="201802">201802</option>
                          <option value="201805">201805</option>
                          <option value="201808">201808</option>
                          <option value="201811">201811</option>
                        </select>&nbsp;&nbsp;&nbsp;

                      </span>
                        <span>

                          <select name="area" class="select area" id="area">
                          <option disabled="" selected="" hidden="">생태구역</option>
                          <!-- <option value="전체">전체</option> -->
                          <option value="동해" >동해</option>
                          <option value="제주" >제주</option>
                          <option value="대한해협" >대한해협</option>
                          <option value="서남해역" >서남해역</option>
                          <option value="서해중부" >서해중부</option>
                        </select>&nbsp;&nbsp;&nbsp;

                        
                      </span>
                      <span>
                        <select name="grade" class="select grade" id="grade" >
                          <option disabled="" selected="" hidden="">해수수질기준</option>
                          <!-- <option value="전체">전체</option> -->
                          <option value="1등급">1</option>
                          <option value="2등급">2</option>
                          <option value="3등급">3</option>
                          <option value="4등급">4</option>
                          <option value="5등급">5</option>
                        </select>&nbsp;&nbsp;&nbsp;
                      </span>
            </div>
          </div>
    <Br>  
   <br> 표층수온 : &nbsp;<input type="text" id="amount" readonly style="border:0; color:DodgerBlue; font-weight:bold;" name="slide-value" />  
      <input type="hidden" id="min" value="-2" name='min'/>
      <input type="hidden" id="max" value="32"name='max' />
      <div id="slider-range" style="width: 500px; color:RoyalBlue;" ></div><br>
                
     <input type="submit" name="submit" value="검색" align="center"/><br><br> <!--입력한 검색조건 php로 전달하기-->
  </form>



    
    <!--입력값으로 검색하기-->

  <?php
   $year=(int)$_POST['Year'];
   $area=(string)$_POST['area'];
   $grade=(string)$_POST['grade'];
   $min_value=(float)$_POST['min']; //표층수온 최소값
   $max_value=(float)$_POST['max']; //표층수온 최대값
   
   if(!empty( $year )){

    echo "년월 : "."$year"."<br/>";
    echo "생태구역 : "."$area"."<br/>";
    echo "해수수질기준 : "."$grade"."<br/>";
    echo "표층수온 최소값 : ".$min_value."<br/>"; //출력값 확인용
    echo "표층수온 최대값 : ".$max_value."<br/>"."<br/>";

    echo "<h4>"."MySQL에 저장된 데이터는 아래와 같습니다."."</h4>"."<br>";

        $sql_template = "SELECT * FROM `datatable` WHERE `년월`= %d AND `표층수온`>%f AND `표층수온`<%f AND `생태구역`= '%s' AND `해수수질기준` = %d"; //%d는 정수형,%f는 실수형
    $sql2=sprintf($sql_template,$year,$min_value,$max_value,$area,$grade);
        $result = mysqli_query($conn,$sql2);
        $row = mysqli_fetch_array($result);
        //csv 다운을 위해 table의 id를 설정해줌(=mytableresult)
// class='type11'

    echo "<table border='1' class='table table-striped table-bordered' style='width:100%' id='mytableresult' data-filtering='true'> <thead><th>년월</th> <th>생태구역</th> <th>연안명칭</th> <th style='display:none'>St.No</th> <th>해수수질기준</th> <th>표층수온</th> <th>저층수온</th> <th style='display:none'>표층염분</th> <th  style='display:none'>저층염분</th> <th style='display:none'>표층pH</th> <th style='display:none'>저층pH</th> <th>표층DO</th> <th>저층DO</th> <th style='display:none'>표층COD</th> <th style='display:none'>저층COD</th> <th style='display:none'>표층NH4-N</th> <th style='display:none'>저층NH4-N</th> <th style='display:none'>표층NO2-N</th> <th style='display:none'>저층NO2-N</th> <th style='display:none'>표층NO3-N</th> <th style='display:none'>저층NO3-N</th> <th>표층DIN</th> <th>저층DIN</th> <th style='display:none'>표층T-N</th> <th style='display:none'>저층T-N</th> <th>표층DIP</th> <th>저층DIP</th> <th style='display:none'>표층T-P</th> <th style='display:none'>저층T-P</th> <th style='display:none'>표층SiO2-Si</th> <th style='display:none'>저층SiO2-Si</th> <th style='display:none'>표층SS</th> <th style='display:none'>저층SS</th> <th>표층Chl-a</th> <th>저층Chl-a</th> <th>표층투명도</th> <th style='display:none'>구군</th> <th style='display:none'>수거량</th> <th style='display:none'>수거량2</th> <th style='display:none'>정화면적</th> <th style='display:none'>일별처리량</th> <th style='display:none'>시설용량(톤/일)(A)</th> <th style='display:none'>유입BOD(mg/L)평균</th> <th style='display:none'>방류BOD(mg/L)평균</th> <th style='display:none'>평균 처리효율(%)</th> <th style='display:none'>유입COD(mg/L)평균</th> <th style='display:none'>방류COD(mg/L)평균</th> <th style='display:none'>유입SS(mg/L)평균</th> <th style='display:none'>방류SS(mg/L)평균</th> <th style='display:none'>유입T-N(mg/L)평균</th> <th style='display:none'>방류T-N(mg/L)평균</th> <th style='display:none'>유입T-P(mg/L)평균</th> <th style='display:none'>방류T-P(mg/L)평균</th> <th style='display:none'>방류대장균군수(개/mL)평균</th> </thead>";
  $n = 1;
  while($row = mysqli_fetch_array($result)){
  echo "<tr>";

  echo "<td>".$row['년월']."</td>";
  echo "<td>".$row['생태구역']."</td>";
  echo "<td>".$row['연안명칭']."</td>";
  echo "<td style='display:none'>".$row['St.No']."</td>";
  echo "<td>".$row['해수수질기준']."</td>";
  echo "<td>".$row['표층수온']."</td>";
  echo "<td>".$row['저층수온']."</td>";
  echo "<td style='display:none'>".$row['표층염분']."</td>";
  echo "<td style='display:none'>".$row['저층염분']."</td>";
  echo "<td style='display:none'>".$row['표층pH']."</td>";
  echo "<td style='display:none'>".$row['저층pH']."</td>";
  echo "<td>".$row['표층DO']."</td>";
  echo "<td>".$row['저층DO']."</td>";
  echo "<td style='display:none'>".$row['표층COD']."</td>";
  echo "<td style='display:none'>".$row['저층COD']."</td>";
  echo "<td style='display:none'>".$row['표층NH4-N']."</td>";
  echo "<td style='display:none'>".$row['저층NH4-N']."</td>";
  echo "<td style='display:none'>".$row['표층NO2-N']."</td>";
  echo "<td style='display:none'>".$row['저층NO2-N']."</td>";
  echo "<td style='display:none'>".$row['표층NO3-N']."</td>";
  echo "<td style='display:none'>".$row['저층NO3-N']."</td>";
  echo "<td>".$row['표층DIN']."</td>";
  echo "<td>".$row['저층DIN']."</td>";
  echo "<td style='display:none'>".$row['표층T-N']."</td>";
  echo "<td style='display:none'>".$row['저층T-N']."</td>";
  echo "<td>".$row['표층DIP']."</td>";
  echo "<td>".$row['저층DIP']."</td>";
  echo "<td style='display:none'>".$row['표층T-P']."</td>";
  echo "<td style='display:none'>".$row['저층T-P']."</td>";
  echo "<td style='display:none'>".$row['표층SiO2-Si']."</td>";
  echo "<td style='display:none'>".$row['저층SiO2-Si']."</td>";
  echo "<td style='display:none'>".$row['표층SS']."</td>";
  echo "<td style='display:none'>".$row['저층SS']."</td>";
  echo "<td>".$row['표층Chl-a']."</td>";
  echo "<td>".$row['저층Chl-a']."</td>";
  echo "<td>".$row['표층투명도']."</td>";
  echo "<td style='display:none'>".$row['구군']."</td>";
  echo "<td style='display:none'>".$row['수거량']."</td>";
  echo "<td style='display:none'>".$row['수거량2']."</td>";
  echo "<td style='display:none'>".$row['정화면적']."</td>";
  echo "<td style='display:none'>".$row['일별처리량']."</td>";
  echo "<td style='display:none'>".$row['시설용량(톤/일)']."</td>";
  echo "<td style='display:none'>".$row['유입BOD(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['방류BOD(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['평균 처리효율(%)']."</td>";
  echo "<td style='display:none'>".$row['유입COD(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['방류COD(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['유입SS(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['방류SS(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['유입T-N(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['방류T-N(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['유입T-P(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['방류T-P(mg/L)평균']."</td>";
  echo "<td style='display:none'>".$row['방류대장균군수(개/mL)평균']."</td>";
  
  echo "</tr>";
  $n++;
  }
  echo "</table>";
  mysqli_close($conn);
}
else{
  echo "데이터 베이스 Select 문을 입력해주세요";
}
  ?>
  
<h4><br>
      <button type='button'onclick="location.href='http://groupc.dothome.co.kr/final.csv'" class="btncsv"><i class="fa fa-download"></i>CSV 원본 다운로드</button>
    <!-- <button type='button'onclick="location.href='http://groupc.dothome.co.kr/test.csv'">CSV원본 다운로드</a> -->
    <button type='button' class="btncsv" id="csvDownloadButton"><i class="fa fa-download"></i>검색한 CSV 다운로드</button>
    </h4><br>

  </div>

    </div>
  
<div class="clear"></div>
</body>
</html>