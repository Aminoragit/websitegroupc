<html lang="ko-KR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>C조를 소개합니다</title>


<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=0.5, maximum-scale=1.0">

<link rel="shortcut icon" href="https://data.kma.go.kr/resources/images/favicon.png">
<link rel="stylesheet" type="text/css" href="./test_files/common.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/font-awesome.min.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/common-ui.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/board.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/messagebox1.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/jquery.bxslider.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/zTreeStyle.css">
<link rel="stylesheet" type="text/css" href="./test_files/sub.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/main.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/layout.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/messagebox1.css" media="all">
<link rel="stylesheet" type="text/css" href="./test_files/jquery.bxslider.css" media="all">

<script type="text/javascript" async="" defer="" src="https://kma.kmamonitor.p-e.kr/matomo/matomo.js"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js.다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(1).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(2).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(3).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(4).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(5).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(6).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(7).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(8).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(9).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(10).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(11).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(12).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(13).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(14).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(15).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(16).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(17).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(18).다운로드"></script><script type="text/javascript" async="" defer="" src="./test_files/matomo.js(19).다운로드"></script><script type="text/javascript" src="./test_files/jquery-2.1.0.min.js.다운로드"></script>
<script type="text/javascript" src="./test_files/ddlist.jquery.min.js.다운로드"></script>
<script type="text/javascript" src="./test_files/common.js.다운로드"></script>
<script type="text/javascript" src="./test_files/jquery.scrollTo.js.다운로드"></script>
<script type="text/javascript" src="./test_files/TweenMax.min.js.다운로드"></script>
<script type="text/javascript" src="./test_files/jquery.messagebox.min.js.다운로드"></script>

<script type="text/javascript" src="./test_files/browser.js.다운로드"></script>
<script type="text/javascript" src="./test_files/menu.js.다운로드"></script>
<script type="text/javascript" src="./test_files/messages.js.다운로드"></script>
<script type="text/javascript" src="./test_files/gdsUtil.js.다운로드"></script>
<script type="text/javascript" src="./test_files/custom.js.다운로드"></script>
<script type="text/javascript" src="./test_files/jquery.mCustomScrollbar.min.js.다운로드"></script>
<script type="text/javascript" src="./test_files/jquery.bxslider.min.js.다운로드"></script>
<script type="text/javascript" src="./test_files/jquery.ztree.all-3.5.min.js.다운로드"></script>
<style type="text/css">
#loading-mask {
    position:absolute;
    top:0;
    left:0;
    background-color:#ffffff;
    opacity:0.80;
    filter:alpha(opacity=80);
    z-index:30000;
    display:none;
}
</style>

<script type="text/javascript">
$(function(){  
	 if($.datepicker){
		 $.datepicker.setDefaults( $.datepicker.regional[ "ko" ] );
	 }
}); 

</script>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
	  var u="https://kma.kmamonitor.p-e.kr/matomo/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
<!-- page script -->
</head>
	<body class="">

	
	
	
	
	
	
	
	<div id="mwrap">
		<div class="top_area">
		<dl class="logo_box">
			<dt>
				<h1 class="logo">
					<a href="https://aminoragit.github.io/websitegroupc/index.html" class="gov_logo1"><img src="./test_files/icon.jpg" alt="기상청 기상자료개방포털" width="50" height="50" style="
    width: 30px;
    height: 30px;
"></a>
					<a href="file:///C:/cmmn/main.do" class="gov_logo2"></a>
				</h1>
			</dt>
		
		</dl>
	</div>
		<!-- Start:Top Area -->
		<script type="text/javascript">
var moveURLFlag = false;
var moveURL = '';
$(document).ready(function () {
	/* 폰트 변경 및 form submit 시 fontSize 파라미터 추가. custom.js 에..... */
	changeFontSize();
	$("form").each(function(){
		addFontSizeToFormOnsubmit($(this).attr("id"));
	});
	
	// 로그인
	$("#loginBtn").on('click', function(e){
		e.preventDefault();
		loginPopup("Y");
	});
	
	// 로그아웃
	$("#logoutBtn").on('click', function(e){
		e.preventDefault();
		$("#loginYn").val("N");
		$("#topForm").attr("method", "post");
		$("#topForm").attr("action", $(this).attr('href')).submit();
	});
	
	// 회원가입
	$("#memberJoinBtn, #mypageBtn, #siteMapBtn").on('click', function(e){
		e.preventDefault();
		$("#topForm").attr("method", "post");
		$("#topForm").attr("action", $(this).attr('href')).submit();
	});
	
	//즐겨찾기
	$("#favBtn").on('click', function(e){
		e.preventDefault();
		favoritePopup();
	});
	
	loginSessionChk();
	
	$("input[name=dataSearch]").on("keypress", function(e){
		
		var kcode= (e.keyCode ? e.keyCode : e.which);
		if (kcode == 13){
			var dataSch = $("#dataSearch").val();
			
			if (dataSch.length < 2){
				Message.alert('검색어는 최소 2자 이상 입력해주세요');
				return false;
			}	
			
			goSearchResult();			
		}
		
		//return false;
	});
});

var GDSsessionExpireTime;
var isLogin = false;

function loginSessionChk(){
	if(isLogin){
		if(GDSsessionExpireTime == undefined ){
			GDSsessionExpireTime = new Date().getTime() + 10*60*1000;
		}
		if(GDSsessionExpireTime != undefined && GDSsessionExpireTime != ''){
			var currentTimeMillis = new Date().getTime();
			if(GDSsessionExpireTime < currentTimeMillis){
				Message.alert('로그아웃 되었습니다.');
				GDSsessionExpireTime = undefined;
				window.location.href='/login/logout.do';
			}
		}
		setTimeout('loginSessionChk()', 10000);
	}
}

function loginPopup(reloadYn){
	$("#wrap-datapop").show();
}

function changeLayOut(loginYN){
	$("#loginYn").val(loginYN);
	if(loginYN == "Y"){
		$("#myPage").show();
		$("#join").hide();
		$("#login").hide();
		$("#logout").show();
		$(".LOGIN_AREA").hide();
	}else{
		$("#myPage").hide();
		$("#join").show();
		$("#login").show();
		$("#logout").hide();
		$(".LOGIN_AREA").show();
	}
	
	checkLoginStatus();
	
	if(moveURLFlag){
		location.href = moveURL;
	}
}

//로그인 상태 체크
function checkLoginStatus(){
	//nothing to do
	//삭제 금지..
}

function goSearchResult(){
	
	var dataSch = $("#dataSearch").val();
	
	if (dataSch.length < 2){
		Message.alert('검색어는 최소 2자 이상 입력해주세요');
		return false;
	}	
	
	$("#searchForm").attr("method", "post");
	$("#searchForm").attr("action", $(this).attr('href')).submit();
}

</script>	
	<form id="topForm" name="topForm" method="post" action="https://data.kma.go.kr/;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5">
		<input type="hidden" name="loginYn" id="loginYn" value="N"> 
	</form>
	
	
<script type="text/javascript">
function favoritePopup(){
	$("#divPopupFavorite").remove();
	
	$.ajax({
		type: 'post',
		url: "/cmmn/myFavoriteLayerPopup.do;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5",
		dataType : "html",
		success: function(data) {

			var pop = $('<div id="divPopupFavorite">'+data+'</div>');
			$('body').append($(pop).clone());
						
			$(".favorite-pop").show();
			
			var loginYN = $("#loginYn").val();
			if(loginYN === 'Y' || 'N' === 'Y'){
				$("#myMenu").show();
			} else {
				$("#info").show();
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			Message.alert(textStatus);
			return false;			
		}
	});
		
}
</script><!-- End:Top Area -->
		<!-- Start:Header Area -->
		<script type="text/javascript">
	function goMenuPage(url, pgmNo, popupYn){
		
		if(popupYn == undefined || popupYn == null){
			popupYn = "N";
		}
		
		if(popupYn == "Y"){
			window.open(url,"menuPopup","width=1200,height=800, toolbar=yes,menubar=yes,location=no,scrollbars=yes,status=no,resizable=yes");
			return false;
		}
		
        if(FormUtil.inStr(url, "?")){
        	url = url + "?";
        }else{
        	url = url + "&";
        }
        url += "pgmNo="+pgmNo;
        
        $("#headerForm").attr("method", "post");
        $("#headerForm").attr("action", url).submit();
	}
	
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
	
	<!-- header -->
	<div id="header" class="main-header">
		<div class="mheader_wrap">
			<form id="headerForm" name="headerForm" action="https://data.kma.go.kr/;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5">
				<input type="hidden" name="gFontSize" id="gFontSize" value=""> <!-- 폰트 크기 유지 위함. -->
			</form>
			
			<form id="downloadForm" name="downloadForm" action="https://data.kma.go.kr/;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5">
				<!-- 설명서 다운로드를 위한 linkMenuCd -->
			</form>
						
			<!-- 검색영역 -->
			<div class="msearch-area">
				<div class="main_titl1">
					<p>더조은 아카데미</p>
					<h3 style="
    padding-left: 0px;
    padding-right: 20px;
"><strong>C조</strong> 수질 오염 예측모델</h3>
				</div>
				
				
			</div>
			
		</div>
	</div>
	<!-- //header -->
			
	
	<div class="mgnb-wrap">
		<div class="mgnb-areas">
			<ul class="mgnbs" style="
    width: 1000px;
    padding-left: 0px;
">
				<li class=""><a href="https://aminoragit.github.io/websitegroupc/html/%EC%98%88%EC%B8%A1%EB%AA%A8%EB%8D%B8%EB%AA%A9%ED%91%9C.html">예측모델 구상 목표</a></li>
				<li class=""><a href="https://data.kma.go.kr/data/grnd/selectAsosRltmList.do;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5?pgmNo=36">데이터</a>
					<div class="mgnbs-div">	
						<dl>
							<dt class="sub1_1">														
								<a href="https://data.kma.go.kr/data/grnd/selectAsosRltmList.do" onclick="goMenuPage('/data/grnd/selectAsosRltmList.do','36');return false;">기상관측</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_1_1"><a href="https://data.kma.go.kr/data/grnd/selectAsosRltmList.do" onclick="goMenuPage('/data/grnd/selectAsosRltmList.do','36');return false;">지상</a></li>
									<li class="sub1_1_2"><a href="https://data.kma.go.kr/data/sea/selectBuoyRltmList.do" onclick="goMenuPage('/data/sea/selectBuoyRltmList.do','52');return false;">해양</a></li>
									<li class="sub1_1_3"><a href="https://data.kma.go.kr/data/hr/selectRdsdRltmList.do" onclick="goMenuPage('/data/hr/selectRdsdRltmList.do','49');return false;">고층</a></li>
									<li class="sub1_1_4"><a href="https://data.kma.go.kr/data/air/selectAmosRltmList.do" onclick="goMenuPage('/data/air/selectAmosRltmList.do','575');return false;">항공</a></li>
									<li class="sub1_1_5"><a href="https://data.kma.go.kr/data/ogd/selectGtsRltmList.do" onclick="goMenuPage('/data/ogd/selectGtsRltmList.do','658');return false;">세계기상전문(GTS)</a></li>
									</ul>									
							</dd>		
						</dl>
						
						
						<dl>
							<dt class="sub1_4">														
								<a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=400" onclick="goMenuPage('/data/rmt/rmtList.do?code=400','570');return false;">기상예보</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_4_1"><a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=400" onclick="goMenuPage('/data/rmt/rmtList.do?code=400','570');return false;">동네예보</a></li>
									<li class="sub1_4_2"><a href="https://data.kma.go.kr/data/weatherReport/wsrList.do" onclick="goMenuPage('/data/weatherReport/wsrList.do','647');return false;">기상특·정보</a></li>
									<li class="sub1_4_3"><a href="https://data.kma.go.kr/data/typhoonData/typList.do" onclick="goMenuPage('/data/typhoonData/typList.do','688');return false;">태풍예보</a></li>
									</ul>									
							</dd>		
						</dl>
						<dl>
							<dt class="sub1_5">														
								<a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=312" onclick="goMenuPage('/data/rmt/rmtList.do?code=312','64');return false;">수치모델</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_5_1"><a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=372" onclick="goMenuPage('/data/rmt/rmtList.do?code=372','568');return false;">수치분석일기도</a></li>
									<li class="sub1_5_2"><a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=312" onclick="goMenuPage('/data/rmt/rmtList.do?code=312','64');return false;">단·중기예측</a></li>
									<li class="sub1_5_3"><a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=320" onclick="goMenuPage('/data/rmt/rmtList.do?code=320','66');return false;">초단기예측</a></li>
									<li class="sub1_5_4"><a href="https://data.kma.go.kr/data/rmt/rmtList.do?code=330" onclick="goMenuPage('/data/rmt/rmtList.do?code=330','87');return false;">파랑모델</a></li>
									</ul>									
							</dd>		
						</dl>
						<dl>
							<dt class="sub1_6">														
								<a href="https://data.kma.go.kr/data/gaw/selectGHGsRltmList.do" onclick="goMenuPage('/data/gaw/selectGHGsRltmList.do','587');return false;">기후</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_6_1"><a href="https://data.kma.go.kr/data/gaw/selectGHGsRltmList.do" onclick="goMenuPage('/data/gaw/selectGHGsRltmList.do','587');return false;">기후변화감시</a></li>
									</ul>									
							</dd>		
						</dl>
						<dl>
							<dt class="sub1_7">														
								<a href="https://data.kma.go.kr/data/lwi/lwiRltmList.do" onclick="goMenuPage('/data/lwi/lwiRltmList.do','635');return false;">응용기상</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_7_1"><a href="https://data.kma.go.kr/data/lwi/lwiRltmList.do" onclick="goMenuPage('/data/lwi/lwiRltmList.do','635');return false;">기상지수</a></li>
									<li class="sub1_7_2"><a href="https://data.kma.go.kr/data/weatherResourceMap/selectWeatherResourceMapSla.do" onclick="goMenuPage('/data/weatherResourceMap/selectWeatherResourceMapSla.do','108');return false;">기상자원지도</a></li>
									</ul>									
							</dd>		
						</dl>
						
						
						<dl>
							<dt class="sub1_10">														
								<a href="https://data.kma.go.kr/tmeta/stn/selectStnList.do" onclick="goMenuPage('/tmeta/stn/selectStnList.do','123');return false;">메타데이터</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_10_1"><a href="https://data.kma.go.kr/tmeta/stn/selectStnList.do" onclick="goMenuPage('/tmeta/stn/selectStnList.do','123');return false;">지점정보</a></li>
									</ul>									
							</dd>		
						</dl>
						<dl>
							<dt class="sub1_11">														
								<a href="https://data.kma.go.kr/data/qualityInfo/qcPresentList.do" onclick="goMenuPage('/data/qualityInfo/qcPresentList.do','676');return false;">품질정보</a>
							</dt>
							<dd>
								<ul>
									<li class="sub1_11_1"><a href="https://data.kma.go.kr/data/qualityInfo/qcPresentList.do" onclick="goMenuPage('/data/qualityInfo/qcPresentList.do','676');return false;">품질현황</a></li>
									<li class="sub1_11_2"><a href="https://data.kma.go.kr/data/qualityInfo/qcReportList.do" onclick="goMenuPage('/data/qualityInfo/qcReportList.do','677');return false;">데이터품질리포트</a></li>
									</ul>									
							</dd>		
						</dl>
						</div>
				</li>
				<li class=""><a href="https://data.kma.go.kr/stcs/grnd/grndTaList.do;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5?pgmNo=70">기후통계분석</a>
					<div class="mgnbs-div">
						<dl>
							<dt class="sub2_1"><a href="https://data.kma.go.kr/climate/average30Years/selectAverage30YearsKoreaList.do" onclick="goMenuPage('/climate/average30Years/selectAverage30YearsKoreaList.do','188');return false;">평년값</a>
							</dt>
							<dd>
								<ul>
									<li class="sub2_1_1"><a href="https://data.kma.go.kr/climate/average30Years/selectAverage30YearsList.do" onclick="goMenuPage('/climate/average30Years/selectAverage30YearsList.do','113');return false;">우리나라 기후평년값</a></li>
									<li class="sub2_1_2"><a href="https://data.kma.go.kr/climate/average30Years/selectAverage30YearsWorldList.do" onclick="goMenuPage('/climate/average30Years/selectAverage30YearsWorldList.do','560');return false;">세계기후평년값</a></li>
									</ul>									
							</dd>
						</dl>
						<dl>
							<dt class="sub2_2"><a href="https://data.kma.go.kr/climate/RankState/selectRankStatisticsDivisionList.do" onclick="goMenuPage('/climate/RankState/selectRankStatisticsDivisionList.do','179');return false;">통계분석</a>
							</dt>
							<dd>
								<ul>
									<li class="sub2_2_1"><a href="https://data.kma.go.kr/climate/RankState/selectRankStatisticsDivisionList.do" onclick="goMenuPage('/climate/RankState/selectRankStatisticsDivisionList.do','179');return false;">조건별통계</a></li>
									<li class="sub2_2_2"><a href="https://data.kma.go.kr/stcs/grnd/grndTaList.do" onclick="goMenuPage('/stcs/grnd/grndTaList.do','70');return false;">기온분석</a></li>
									<li class="sub2_2_3"><a href="https://data.kma.go.kr/stcs/grnd/grndRnList.do" onclick="goMenuPage('/stcs/grnd/grndRnList.do','69');return false;">강수량분석</a></li>
									<li class="sub2_2_4"><a href="https://data.kma.go.kr/climate/StatisticsDivision/selectStatisticsDivision.do" onclick="goMenuPage('/climate/StatisticsDivision/selectStatisticsDivision.do','158');return false;">다중지점통계</a></li>
									<li class="sub2_2_5"><a href="https://data.kma.go.kr/stcs/grnd/selectCloudSpecifyDay.do" onclick="goMenuPage('/stcs/grnd/selectCloudSpecifyDay.do','671');return false;">전운량 계급별일수</a></li>
									<li class="sub2_2_6"><a href="https://data.kma.go.kr/stcs/grnd/selectRnSpecifyDay.do" onclick="goMenuPage('/stcs/grnd/selectRnSpecifyDay.do','672');return false;">강수 계급별일수</a></li>
									<li class="sub2_2_7"><a href="https://data.kma.go.kr/climate/ObsValSearch/selectObsValSearchWindRose.do" onclick="goMenuPage('/climate/ObsValSearch/selectObsValSearchWindRose.do','161');return false;">바람장미</a></li>
									</ul>									
							</dd>
						</dl>
						<dl>
							<dt class="sub2_3"><a href="https://data.kma.go.kr/climate/heatWave/selectHeatWaveChart.do" onclick="goMenuPage('/climate/heatWave/selectHeatWaveChart.do','106');return false;">기상현상일수</a>
							</dt>
							<dd>
								<ul>
									<li class="sub2_3_1"><a href="https://data.kma.go.kr/stcs/grnd/grndRnDayList.do" onclick="goMenuPage('/stcs/grnd/grndRnDayList.do','156');return false;">강수일수</a></li>
									<li class="sub2_3_2"><a href="https://data.kma.go.kr/climate/yellowDust/selectYellowDustChart.do" onclick="goMenuPage('/climate/yellowDust/selectYellowDustChart.do','112');return false;">황사일수</a></li>
									<li class="sub2_3_3"><a href="https://data.kma.go.kr/climate/heatWave/selectHeatWaveChart.do" onclick="goMenuPage('/climate/heatWave/selectHeatWaveChart.do','106');return false;">폭염일수</a></li>
									<li class="sub2_3_4"><a href="https://data.kma.go.kr/climate/tropicalNight/selectTropicalNightChart.do" onclick="goMenuPage('/climate/tropicalNight/selectTropicalNightChart.do','105');return false;">열대야일수</a></li>
									<li class="sub2_3_5"><a href="https://data.kma.go.kr/climate/solarTerms/solarTerms.do" onclick="goMenuPage('/climate/solarTerms/solarTerms.do','104');return false;">24절기</a></li>
									<li class="sub2_3_6"><a href="https://data.kma.go.kr/climate/extremum/selectExtremumList.do" onclick="goMenuPage('/climate/extremum/selectExtremumList.do','103');return false;">순위값</a></li>
									<li class="sub2_3_7"><a href="https://data.kma.go.kr/climate/rainySeason/selectRainySeasonList.do" onclick="goMenuPage('/climate/rainySeason/selectRainySeasonList.do','120');return false;">장마</a></li>
									</ul>									
							</dd>
						</dl>
						<dl>
							<dt class="sub2_4"><a href="https://data.kma.go.kr/climate/windChill/selectWindChillChart.do" onclick="goMenuPage('/climate/windChill/selectWindChillChart.do','111');return false;">응용기상분석</a>
							</dt>
							<dd>
								<ul>
									<li class="sub2_4_1"><a href="https://data.kma.go.kr/climate/windChill/selectWindChillChart.do" onclick="goMenuPage('/climate/windChill/selectWindChillChart.do','111');return false;">체감온도</a></li>
									<li class="sub2_4_2"><a href="https://data.kma.go.kr/climate/ehum/selectEhumChart.do" onclick="goMenuPage('/climate/ehum/selectEhumChart.do','110');return false;">실효습도</a></li>
									<li class="sub2_4_3"><a href="https://data.kma.go.kr/climate/heatIndex/selectHeatIndexChart.do" onclick="goMenuPage('/climate/heatIndex/selectHeatIndexChart.do','101');return false;">열지수</a></li>
									<li class="sub2_4_4"><a href="https://data.kma.go.kr/climate/degreeDay/selectDegreeDayChart.do" onclick="goMenuPage('/climate/degreeDay/selectDegreeDayChart.do','99');return false;">냉/난방도일</a></li>
									<li class="sub2_4_5"><a href="https://data.kma.go.kr/climate/sot/selectSotChart.do" onclick="goMenuPage('/climate/sot/selectSotChart.do','100');return false;">적산온도</a></li>
									</ul>									
							</dd>
						</dl>
						</div>
				</li>
										
				<li class=""><a href="https://data.kma.go.kr/community/board/selectBoardList.do;jsessionid=eLASVS5105ydHa1nVcL4kWGj9tmQacqO32oSgaabCXWmJcKf4tbynlyU0QSbWgaV.was02_servlet_engine5?bbrdTypeNo=2&amp;pgmNo=40">소통과 참여</a>
					<div class="mgnbs-div">
						
						<div class="mgnbs-div2">
							<dl>
								<dt class="sub3_1">
									<a href="https://data.kma.go.kr/community/board/selectBoardList.do?bbrdTypeNo=2" onclick="goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=2','40');return false;">공지사항</a>
								</dt>
								<dd>
									<ul>
										</ul>									
								</dd>		
							</dl>	
							<dl>
								<dt class="sub3_2">
									<a href="https://data.kma.go.kr/community/board/selectBoardList.do?bbrdTypeNo=7" onclick="goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=7','59');return false;">자유게시판</a>
								</dt>
								<dd>
									<ul>
										</ul>									
								</dd>		
							</dl>	
							<dl>
								<dt class="sub3_3">
									<a href="https://data.kma.go.kr/community/board/selectBoardList.do?bbrdTypeNo=4" onclick="goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=4','92');return false;">자료실</a>
								</dt>
								<dd>
									<ul>
										</ul>									
								</dd>		
							</dl>	
								
							<dl>
								<dt class="sub3_5">
									<a href="https://data.kma.go.kr/community/board/selectBoardList.do?bbrdTypeNo=1" onclick="goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=1','96');return false;">QnA</a>
								</dt>
								<dd>
									<ul>
										</ul>									
								</dd>		
							</dl>	
							<dl>
								<dt class="sub3_6">
									<a href="https://data.kma.go.kr/community/selectErrorDataList.do" onclick="goMenuPage('/community/selectErrorDataList.do','141');return false;">데이터품질대화방</a>
								</dt>
								<dd>
									<ul>
										</ul>									
								</dd>		
							</dl>	
							</div>
					</div>
				</li>
			<li class=""><a href="https://aminoragit.github.io/websitegroupc/html/C%EC%A1%B0%EC%86%8C%EA%B0%9C.html">C조에 대하여</a></li></ul>
				
				<div class="samenu1">
					<a href="https://aminoragit.github.io/websitegroupc/html/C%EC%A1%B0%EC%86%8C%EA%B0%9C.html#"><img src="./test_files/all_btn1.gif" alt="전체 메뉴 보기"></a>
						
					<div class="mgnbs-div3">
						<div class="section-sitemap">
							<ul class="sitemap-d1 s1">
								<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/grnd/selectAsosRltmList.do','36');return false;">데이터</a>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/grnd/selectAsosRltmList.do','36');return false;">기상관측</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/grnd/selectAsosRltmList.do','36');return false;">지상</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/sea/selectBuoyRltmList.do','52');return false;">해양</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/hr/selectRdsdRltmList.do','49');return false;">고층</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/air/selectAmosRltmList.do','575');return false;">항공</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/ogd/selectGtsRltmList.do','658');return false;">세계기상전문(GTS)</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=21','683');return false;">기상위성</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=20','63');return false;">천리안 위성 1호</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=21','683');return false;">천리안 위성 2A호</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=10','61');return false;">레이더</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=10','61');return false;">사이트</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=11','62');return false;">합성</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=400','570');return false;">기상예보</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=400','570');return false;">동네예보</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/weatherReport/wsrList.do','647');return false;">기상특·정보</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/typhoonData/typList.do','688');return false;">태풍예보</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=312','64');return false;">수치모델</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=372','568');return false;">수치분석일기도</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=312','64');return false;">단·중기예측</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=320','66');return false;">초단기예측</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/rmt/rmtList.do?code=330','87');return false;">파랑모델</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/gaw/selectGHGsRltmList.do','587');return false;">기후</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/gaw/selectGHGsRltmList.do','587');return false;">기후변화감시</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/lwi/lwiRltmList.do','635');return false;">응용기상</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/lwi/lwiRltmList.do','635');return false;">기상지수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/weatherResourceMap/selectWeatherResourceMapSla.do','108');return false;">기상자원지도</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/weatherReport/eqkList.do','654');return false;">지진화산</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/weatherReport/eqkList.do','654');return false;">지진화산 특·정보</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/history/selectJoseonDynastyHistoryList.do','81');return false;">역사기후</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/cdps/record/selectRecordList.do','45');return false;">자기기록지</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/cdps/weather/selectWeatherList.do','44');return false;">종이일기도</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/cdps/original/selectOriginalList.do','46');return false;">통계원부류</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/cdps/original/selectOriginalMaritimeList.do','202');return false;">역사자료</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationHsList.do','153');return false;">기상기록집</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/tmeta/stn/selectStnList.do','123');return false;">메타데이터</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/tmeta/stn/selectStnList.do','123');return false;">지점정보</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/qualityInfo/qcPresentList.do','676');return false;">품질정보</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/qualityInfo/qcPresentList.do','676');return false;">품질현황</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/qualityInfo/qcReportList.do','677');return false;">데이터품질리포트</a></li>
												</ul>
											</li>
									</ul>
									</li>
							</ul>
							<ul class="sitemap-d1 s2">
								<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/RankState/selectRankStatisticsDivisionList.do','179');return false;">기후통계분석</a>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/average30Years/selectAverage30YearsKoreaList.do','188');return false;">평년값</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/average30Years/selectAverage30YearsList.do','113');return false;">우리나라 기후평년값</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/average30Years/selectAverage30YearsWorldList.do','560');return false;">세계기후평년값</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/RankState/selectRankStatisticsDivisionList.do','179');return false;">통계분석</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/RankState/selectRankStatisticsDivisionList.do','179');return false;">조건별통계</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/stcs/grnd/grndTaList.do','70');return false;">기온분석</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/stcs/grnd/grndRnList.do','69');return false;">강수량분석</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/StatisticsDivision/selectStatisticsDivision.do','158');return false;">다중지점통계</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/stcs/grnd/selectCloudSpecifyDay.do','671');return false;">전운량 계급별일수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/stcs/grnd/selectRnSpecifyDay.do','672');return false;">강수 계급별일수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/ObsValSearch/selectObsValSearchWindRose.do','161');return false;">바람장미</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/heatWave/selectHeatWaveChart.do','106');return false;">기상현상일수</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/stcs/grnd/grndRnDayList.do','156');return false;">강수일수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/yellowDust/selectYellowDustChart.do','112');return false;">황사일수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/heatWave/selectHeatWaveChart.do','106');return false;">폭염일수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/tropicalNight/selectTropicalNightChart.do','105');return false;">열대야일수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/solarTerms/solarTerms.do','104');return false;">24절기</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/extremum/selectExtremumList.do','103');return false;">순위값</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/rainySeason/selectRainySeasonList.do','120');return false;">장마</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/windChill/selectWindChillChart.do','111');return false;">응용기상분석</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/windChill/selectWindChillChart.do','111');return false;">체감온도</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/ehum/selectEhumChart.do','110');return false;">실효습도</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/heatIndex/selectHeatIndexChart.do','101');return false;">열지수</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/degreeDay/selectDegreeDayChart.do','99');return false;">냉/난방도일</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/climate/sot/selectSotChart.do','100');return false;">적산온도</a></li>
												</ul>
											</li>
									</ul>
									</li>
							</ul>
							<ul class="sitemap-d1 s3">
								<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationAsosList.do','143');return false;">간행물</a>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationAsosList.do','143');return false;">지상</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationAsosList.do','143');return false;">지상</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationAwsList.do','145');return false;">방재</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationAgList.do','146');return false;">농업</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationNkList.do','566');return false;">북한</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationSeList.do','148');return false;">해양</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationSeList.do','148');return false;">해양</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationTmList.do','147');return false;">고층</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationTmList.do','147');return false;">고층</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://radar.kma.go.kr/notification/pds/publish/index.do','149');return false;">레이더</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://radar.kma.go.kr/notification/pds/publish/index.do','149');return false;">낙뢰연보</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://web.kma.go.kr/communication/webzine/earthquakeyearly.jsp','150');return false;">지진</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://web.kma.go.kr/communication/webzine/earthquakeyearly.jsp','150');return false;">지진연보</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://amo.kma.go.kr/new/html/news/news08.jsp?field=subject&amp;text=%EA%B3%B5%ED%95%AD%EA%B8%B0%ED%9B%84%EC%9E%90%EB%A3%8C&amp;x=0&amp;y=0','152');return false;">항공</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationMetList.do','682');return false;">항공기상연월보</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://amo.kma.go.kr/new/html/news/news08.jsp?field=subject&amp;text=%EA%B3%B5%ED%95%AD%EA%B8%B0%ED%9B%84%EC%9E%90%EB%A3%8C&amp;x=0&amp;y=0','152');return false;">공항기후자료집</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class="has-child"><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://www.climate.go.kr/home/bbs/list.php?code=24&amp;bname=report&amp;skind=subject&amp;sword=%C1%F6%B1%B8%B4%EB%B1%E2%B0%A8%BD%C3%BA%B8%B0%ED%BC%AD','151');return false;">기후변화</a>
											<ul class="sitemap-d3">
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://www.climate.go.kr/home/bbs/list.php?code=24&amp;bname=report&amp;skind=subject&amp;sword=%C1%F6%B1%B8%B4%EB%B1%E2%B0%A8%BD%C3%BA%B8%B0%ED%BC%AD','151');return false;">지구대기감시보고서</a></li>
												<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('http://www.climate.go.kr/home/bbs/list.php?code=93&amp;bname=abnormal','154');return false;">이상기후보고서</a></li>
												</ul>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationWbList.do','155');return false;">백서</a>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/data/publication/publicationGlList.do','681');return false;">규정·지침</a>
											</li>
									</ul>
									</li>
							</ul>
							<ul class="sitemap-d1 s4">
								<li><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=2','40');return false;">소통과참여</a>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=2','40');return false;">공지사항</a>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=7','59');return false;">자유게시판</a>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=4','92');return false;">자료실</a>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=3','95');return false;">FAQ</a>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/board/selectBoardList.do?bbrdTypeNo=1','96');return false;">QnA</a>
											</li>
									</ul>
									<ul class="sitemap-d2">
										<li class=""><a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" onclick="javascript:goMenuPage('/community/selectErrorDataList.do','141');return false;">데이터품질대화방</a>
											</li>
									</ul>
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
		
<!-- End:Header Area -->
		<!-- Start:Body Area -->
		<script type="text/javascript">
	$(document).ready(function () {
		// 회원가입은 백그라운드를 제거한다.
		$("body").removeClass();
	});
	
</script>
		<!-- container -->
	
				
		<!-- //container --><!-- End:Body Area -->
		<!-- Start:Bottom Area -->

<div id="container" class="intro" style="
    width: 1070px;
">

			<div>
				<div class="intro_container">

			

				    <h1>사용한 데이터</h1>
				    
				    <h4>
						<a class="btn" href="http://groupc.dothome.co.kr/test1.csv" download>CSV원본 다운로드</a>

						<a class="btn" href="http://groupc.dothome.co.kr/testpjm12.php" download>사용한 데이터 새창으로 열기</a>
				    </h4>
				    


			
						





</div>
</div>
		</div>


		<div class="clear">
</div>



<!-- footer -->
	
	<!-- //footer -->

	<!-- hidden frame -->
	<iframe width="0" height="0" id="hiddenFrame" name="hiddenFrame" style="display: none;" title="다운로드 사용 용도" src="./test_files/saved_resource.html"></iframe>
	<!-- hidden frame -->
	<div id="loading-mask"><img id="mask_loding_image_bar" src="./test_files/loader.gif" alt="loading..."></div>
	
	<!-- START OF LOGGER TRACKING SCRIPT -->
	
<!-- 	서버에는 적용 아래 주석 풀고 적용 -->
<!--     <script type="text/javascript" src="http://www.kma.go.kr/share/js/logger2.data.kma.go.kr.1053.js"></script> -->


    <!-- END OF LOGGER TRACKING SCRIPT -->


<!-- End:Bottom Area -->
	</div>
	<!-- Start:login Area -->
	<script type="text/javascript">
	$(document).ready(function () {
		if (getCookie("loginId")) {
			var cookieId = getCookie("loginId");

			if(cookieId.indexOf('jsessionid') != -1){
				cookieId = "";
			}
			$("#loginId").val(cookieId);
			$("#saveId").prop('checked', true);
		}

		// 닫기 버튼
		$("#loginPopCloseBtn").on('click', function(){
			$("#wrap-datapop").hide();
		});

		// 아이디/비번 찾기
		$("#findIdPw").on('click', function(){
			$("#aform").attr("method", "post");
			$("#aform").attr("action", "/cmmn/selectMemberForgotInfo.do").submit();
		});

		// 회원가입
		$("#joinMember").on('click', function(){
			// $("#aform").attr("method", "post");
			// $("#aform").attr("action", "/cmmn/selectMemberType.do").submit();
			location.href="/cmmn/selectMemberAgree.do";
		});


		$("input[name=loginId], input[name=passwordNo]").on("keypress", function(e){

			var kcode= (e.keyCode ? e.keyCode : e.which);
			if (kcode == 13){
				var eventElementId = $(this).attr('id');
				fnLogin();
			}
			//return false;
		});
	});

	function setCookie(name, value, expiredays) //쿠키 저장함수
	{
		var todayDate = new Date();
		todayDate.setDate(todayDate.getDate() + expiredays);
		document.cookie = name + "=" + escape(value) + "; path=/; expires="
				+ todayDate.toGMTString() + ";";
	}

	function getCookie(Name) { // 쿠키 불러오는 함수
		var search = Name + "=";
		if (document.cookie.length > 0) { // if there are any cookies
			offset = document.cookie.indexOf(search);
			if (offset != -1) { // if cookie exists
				offset += search.length; // set index of beginning of value
				end = document.cookie.indexOf(";", offset); // set index of end of cookie value
				if (end == -1)
					end = document.cookie.length;
				return unescape(document.cookie.substring(offset, end));
			}
		}
	}

	function fnLoginInit() {
		$('#loginId').val('');
		$('#passwordNo').val('');
	}

	function fnLogin() {

		if ($('#loginId').val() == null || $('#loginId').val() == '') {
			Message.alert('아이디를 입력해 주세요.');
			return false;
		} else if ($('#passwordNo').val() == null
				|| $('#passwordNo').val() == '') {
			Message.alert('비밀번호를 입력해 주세요.');
			return false;
		}

		if ($("#saveId").is(":checked")) { // 아이디 저장을 체크 하였을때
			setCookie("loginId", $('#loginId').val(), 7); //쿠키이름을 id로 아이디입력필드값을 7일동안 저장
		} else { // 아이디 저장을 체크 하지 않았을때
			setCookie("loginId", $('#loginId').val(), 0); //날짜를 0으로 저장하여 쿠키삭제
		}

		$.ajax({
			type : "post",
			url : "/login/loginAjax.do",
			data: $("#aform").serialize(),
			//crossDomain : true,
			dataType : "json",
			error : function() {
				Message.alert("로그인중 오류가 발생하였습니다.");
			},
			success : function(data) {

				if (data.msg == 'stand') {
					Message.alert('승인되지 않은 회원입니다. 관리자에게 문의하세요');
					//fnLoginInit();
				} else if (data.msg == 'failLogin') {
					Message.alert('로그인 실패하였습니다. 아이디와 비밀번호를 확인하세요.');
					fnLoginInit();
				} else if (data.msg == 'warnLogin') {
					Message.alert('로그인실패 2회 초과시 5분간 로그인이 중지됩니다.');
					fnLoginInit();
				} else if (data.msg == 'warnLogin1') {
					Message.alert('로그인실패 1회 초과시 5분간 로그인이 중지됩니다.');
					fnLoginInit();
				} else if (data.msg == 'warnLogin2') {
					Message.alert('다음번 로그인실패시 5분간 로그인이 중지됩니다.');
					fnLoginInit();
				} else if (data.msg == 'lockLogin') {
					Message.alert('5회 이상 로그인 실패로 로그인이 일시 중지되었습니다. 5분 후에 다시 접속하세요.');
					fnLoginInit();
				} else {

					if(data.data.qscncYn == "Y"){ // 휴면계정인 사용자가 로그인 한 경우....
						location.href = "/cmmn/quiescence.do";
					}else if(data.data.reAgreeYn == "Y"){ // 재동의가 필요한 사용자인 경우...(가입 후 23개월이 지난 사용자)
						location.href = "/cmmn/reagree.do";
					}else{
						changeLayOut("Y");
						$("#wrap-datapop").hide();
						isLogin = true;
// 						!!서버적용시 주석제거
// 						loginSessionChk();
					}
				}
			}
		});
	}

</script>
	<!-- 로그인 팝업 -->
	<div id="wrap-datapop" class="login" style="display:none">
		<div class="datapop-container">
			<div class="datapop-header">
				<h3 class="datapop-title">로그인</h3>
				<a href="https://data.kma.go.kr/cmmn/static/staticPage.do?page=intro#" id="loginPopCloseBtn" class="btn-close"><img src="./test_files/btn_close.png" alt="닫기"></a>
			</div>
			<div class="datapop-content">
				<form name="aform" id="aform" method="post" onsubmit="return false;" action="https://data.kma.go.kr/">
				<p class="text-copy">서비스 이용을 위하여 로그인이 필요합니다.</p>

			<div class="login_box2">
				<span class="row">
					<input type="text" required="" id="loginId" name="loginId" class="input-medium" title="아이디(E-mail)" placeholder="이메일">
				</span>
				<span class="row">
					<input type="password" required="" id="passwordNo" name="passwordNo" class="input-medium" title="비밀번호" placeholder="비밀번호" autocomplete="off">
				</span>

				<input type="submit" class="btn btn-primary btn-submit" onclick="javascript:fnLogin(); return false;" id="loginbtn" value="로그인" name="loginbtn">

				<div id="check">
					<input type="checkbox" title="아이디저장" name="saveId" id="saveId">
					<label for="saveId">아이디저장</label>
				</div>
			</div>

				<div id="btnArea" class="text-center">
					<!-- input type="submit"  class="btn btn-default login_btn" id="joinMember" value="회원가입"  /> -->
					<input type="button" class="btn btn-default login_btn" id="joinMember" value="회원가입">
					<input type="button" class="btn btn-default login_btn" id="findIdPw" value="아이디/비밀번호 찾기">
				</div>

				</form>
			</div>
		</div>
	</div>
	<!-- //로그인 팝업 -->
<!-- End:login Area -->




</body></html>