<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MysqlDB 연동</title>
	
</head>
<body style="
    margin-left: 20px;
    margin-top: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
">
	<!-- DB와의 연결 확인용 connect -->
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

	<div class="content-head">
	<h2 align="center">사용할 데이터 출력하기</h2>
	</div><br>

	
 <div class="search-form-container2 clearfix">
 	<form method="POST" action="datatablej.php">
						<div id="TB_search">
							<div>
								<div>
									⊙검색조건: &nbsp;&nbsp;
												
								<span id="divStartYear">
													<select name="area" class="select area" id="area">
													<option disabled="" selected="" hidden="">생태구역</option>
													<option value="생태구역">전체</option>
													<option value="동해">동해</option>
													<option value="제주">제주</option>
													<option value="대한해협">대한해협</option>
													<option value="서남해역">서남해역</option>
													<option value="서해중부">서해중부</option>
												</select>&nbsp;&nbsp;&nbsp;
								<span>
												<select name="grade" class="select grade" id="grade">
													<option disabled="" selected="" hidden="">해수수질기준</option>
													<option value="해수수질기준">전체</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>&nbsp;&nbsp;&nbsp;
								</span>
								<span>
									<select name="Year" class="select year" id="year">
										<option disabled="" selected="" hidden="">년월</option>
										<option value="년월">전체</option>
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
													<option value="201902">201902</option>
													<option value="201905">201905</option>
													<option value="201908">201908</option>
													<option value="201911">201911</option>
												</select>&nbsp;&nbsp;&nbsp;
									</span>
						</div>
					</div>
   <br/>	
   <br/> 표층수온 : &nbsp;
   <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="slide-value" />  
      <input type="hidden" id="min" value="-10" name='min'/>
      <input type="hidden" id="max" value="32"name='max' />
      <div id="slider-range" style="width: 500px;" ></div><br>
     						

     <input type="submit" name="submit" value="검색" align="center"/><br><br> <!--입력한 검색조건 php로 전달하기-->
</form>


	<?php
	if (is_numeric($_POST['Year'])){ 
			$year=(int)$_POST['Year'];} 
 		else{
 			$year=(string)$_POST['Year'];
		} 		 

	$max_value=(float)$_POST['max'];
	$min_value=(float)$_POST['min'];
	$area=(string)$_POST['area'];
	$grade=(string)$_POST['grade'];
 		
	 echo "년월 : "."$year"."<br/>";
	 echo "생태구역 : "."$area"."<br/>";
	 echo "해수수질기준 : "."$grade"."<br/>";
	 echo "표층수온 최소값 : ".$min_value."<br/>"; //출력값 확인용
	 echo "표층수온 최대값 : ".$max_value."<br/>"."<br/>";
	 ?>
										</div>	
								
									  </div>
							

    <h4>MySQL에 저장된 데이터는 아래와 같습니다.</h4><br>
    <!--입력값으로 검색하기-->

	<?php
		// 조건이 맞으면 실행 Year에 전체가 있으므로 
	if(!empty($year)){
 	 	if(is_string($year)){
    	    $sql_template = "SELECT * FROM `datatable` WHERE `년월`=%s AND `표층수온`>%f AND `표층수온`<%f AND `생태구역`=%s"; //%d는 정수형,%f는 실수형 %s는 문자형
	    	}else{
	    		$sql_template = "SELECT * FROM `datatable` WHERE `년월`=%d AND `표층수온`>%f AND `표층수온`<%f AND `생태구역`=%s"; //%d는 정수형,%f는 실수형 %s는 문자형
	    	}


 		$sql2=sprintf($sql_template,$year,$min_value,$max_value,$area);
        $result = mysqli_query($conn,$sql2);
        $row = mysqli_fetch_array($result);
        //csv 다운을 위해 table의 id를 설정해줌(=mytableresult)
// class='type11'

		echo "<table border='1' class='table table-striped table-bordered' style='width:100%' id='mytableresult' data-filtering='true'> <thead><th>년월</th> <th>생태구역</th> <th>연안명칭</th> <th style='display:none'>St.No</th> <th>해수수질기준</th> <th>표층수온</th> <th>저층수온</th> <th  style='display:none'>표층염분</th> <th  style='display:none'>저층염분</th> <th style='display:none'>표층pH</th> <th style='display:none'>저층pH</th> <th>표층DO</th> <th>저층DO</th> <th style='display:none'>표층COD</th> <th style='display:none'>저층COD</th> <th style='display:none'>표층NH4-N</th> <th style='display:none'>저층NH4-N</th> <th style='display:none'>표층NO2-N</th> <th style='display:none'>저층NO2-N</th> <th style='display:none'>표층NO3-N</th> <th style='display:none'>저층NO3-N</th> <th>표층DIN</th> <th>저층DIN</th> <th style='display:none'>표층T-N</th> <th style='display:none'>저층T-N</th> <th>표층DIP</th> <th>저층DIP</th> <th style='display:none'>표층T-P</th> <th style='display:none'>저층T-P</th> <th style='display:none'>표층SiO2-Si</th> <th style='display:none'>저층SiO2-Si</th> <th style='display:none'>표층SS</th> <th style='display:none'>저층SS</th> <th>표층Chl-a</th> <th>저층Chl-a</th> <th>표층투명도</th> <th style='display:none'>구군</th> <th style='display:none'>수거량</th> <th style='display:none'>수거량2</th> <th style='display:none'>정화면적</th> <th style='display:none'>일별처리량</th> <th style='display:none'>시설용량(톤/일)(A)</th> <th style='display:none'>유입BOD(mg/L)평균</th> <th style='display:none'>방류BOD(mg/L)평균</th> <th style='display:none'>평균 처리효율(%)</th> <th style='display:none'>유입COD(mg/L)평균</th> <th style='display:none'>방류COD(mg/L)평균</th> <th style='display:none'>유입SS(mg/L)평균</th> <th style='display:none'>방류SS(mg/L)평균</th> <th style='display:none'>유입T-N(mg/L)평균</th> <th style='display:none'>방류T-N(mg/L)평균</th> <th style='display:none'>유입T-P(mg/L)평균</th> <th style='display:none'>방류T-P(mg/L)평균</th> <th style='display:none'>방류대장균군수(개/mL)평균</th> </thead>";
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
	echo "데이터 베이스 select 문을 입력해주세요";
}
	?>
	
<h4><br>
    	<button type='button'onclick="location.href='http://groupc.dothome.co.kr/final.csv'" class="btncsv"><i class="fa fa-download"></i>CSV 원본 다운로드</button>
		<!-- <button type='button'onclick="location.href='http://groupc.dothome.co.kr/test.csv'">CSV원본 다운로드</a> -->
		<button type='button' class="btncsv" id="csvDownloadButton"><i class="fa fa-download"></i>검색한 CSV 다운로드</button>
    </h4><br>

</body>
</html>
