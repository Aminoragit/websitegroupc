<!DOCTYPE html>
<html>
<head>

</head>
    <title>test</title>
    <link rel="shortcut icon" href="#">
</head>
<body>

	<?php
	$db_host = "localhost"; 
	$db_user = "groupc"; 
	$db_passwd = "Cgroup12!";
	$db_name = "groupc"; 
	$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);


	if (mysqli_connect_errno($conn)) {
	echo "데이터베이스 연결 실패: " . mysqli_connect_error();
	} else {
	echo "데이터베이스 연결 성공";
	}

	?>

    <h1>사용한 데이터 출력</h1>
    
    <h4>MySQL에 저장된 데이터는 아래와 같습니다.
		<a class="btn" href="http://groupc.dothome.co.kr/test.csv" download>CSV원본 다운로드</a>
    </h4>
    <form method="POST" action="testtest4.php">
        년월: <input type="text" name="YEAR"/><br/>   

        <input type="submit" name="submit"/>
    </form>

    <div>
	<?php
	 $year=(int)$_POST['YEAR'];
 	 if(!empty( $year )){
            $sql2="SELECT * FROM `datatable` WHERE `년월`="."$year";
         
            $result = mysqli_query($conn,$sql2);
            $row = mysqli_fetch_array($result);
            
		echo "<table border=’1′> <tr> <th>년월</th> <th>생태구역</th> <th>연안명칭</th> <th>St.No</th> <th>해수수질기준</th> <th>표층수온</th> <th>저층수온</th> <th>표층염분</th> <th>저층염분</th> <th>표층pH</th> <th>저층pH</th> <th>표층DO</th> <th>저층DO</th> <th>표층COD</th> <th>저층COD</th> <th>표층NH4-N</th> <th>저층NH4-N</th> <th>표층NO2-N</th> <th>저층NO2-N</th> <th>표층NO3-N</th> <th>저층NO3-N</th> <th>표층DIN</th> <th>저층DIN</th> <th>표층T-N</th> <th>저층T-N</th> <th>표층DIP</th> <th>저층DIP</th> <th>표층T-P</th> <th>저층T-P</th> <th>표층SiO2-Si</th> <th>저층SiO2-Si</th> <th>표층SS</th> <th>저층SS</th> <th>표층Chl-a</th> <th>저층Chl-a</th> <th>표층투명도</th> <th>구군</th> <th>수거량</th> <th>수거량2</th> <th>정화면적</th> <th>일별처리량</th> <th>시설용량(톤/일)(A)</th> <th>유입BOD(mg/L)평균</th> <th>방류BOD(mg/L)평균</th> <th>평균 처리효율(%)</th> <th>유입COD(mg/L)평균</th> <th>방류COD(mg/L)평균</th> <th>유입SS(mg/L)평균</th> <th>방류SS(mg/L)평균</th> <th>유입T-N(mg/L)평균</th> <th>방류T-N(mg/L)평균</th> <th>유입T-P(mg/L)평균</th> <th>방류T-P(mg/L)평균</th> <th>방류대장균군수(개/mL)평균</th> </tr>";
	$n = 1;
	while($row = mysqli_fetch_array($result)){
	echo "<tr>";

	echo "<td>".$row['년월']."</td>";
	echo "<td>".$row['생태구역']."</td>";
	echo "<td>".$row['연안명칭']."</td>";
	echo "<td>".$row['St.No']."</td>";
	echo "<td>".$row['해수수질기준']."</td>";
	echo "<td>".$row['표층수온']."</td>";
	echo "<td>".$row['저층수온']."</td>";
	echo "<td>".$row['표층염분']."</td>";
	echo "<td>".$row['저층염분']."</td>";
	echo "<td>".$row['표층pH']."</td>";
	echo "<td>".$row['저층pH']."</td>";
	echo "<td>".$row['표층DO']."</td>";
	echo "<td>".$row['저층DO']."</td>";
	echo "<td>".$row['표층COD']."</td>";
	echo "<td>".$row['저층COD']."</td>";
	echo "<td>".$row['표층NH4-N']."</td>";
	echo "<td>".$row['저층NH4-N']."</td>";
	echo "<td>".$row['표층NO2-N']."</td>";
	echo "<td>".$row['저층NO2-N']."</td>";
	echo "<td>".$row['표층NO3-N']."</td>";
	echo "<td>".$row['저층NO3-N']."</td>";
	echo "<td>".$row['표층DIN']."</td>";
	echo "<td>".$row['저층DIN']."</td>";
	echo "<td>".$row['표층T-N']."</td>";
	echo "<td>".$row['저층T-N']."</td>";
	echo "<td>".$row['표층DIP']."</td>";
	echo "<td>".$row['저층DIP']."</td>";
	echo "<td>".$row['표층T-P']."</td>";
	echo "<td>".$row['저층T-P']."</td>";
	echo "<td>".$row['표층SiO2-Si']."</td>";
	echo "<td>".$row['저층SiO2-Si']."</td>";
	echo "<td>".$row['표층SS']."</td>";
	echo "<td>".$row['저층SS']."</td>";
	echo "<td>".$row['표층Chl-a']."</td>";
	echo "<td>".$row['저층Chl-a']."</td>";
	echo "<td>".$row['표층투명도']."</td>";
	echo "<td>".$row['구군']."</td>";
	echo "<td>".$row['수거량']."</td>";
	echo "<td>".$row['수거량2']."</td>";
	echo "<td>".$row['정화면적']."</td>";
	echo "<td>".$row['일별처리량']."</td>";
	echo "<td>".$row['시설용량(톤/일)']."</td>";
	echo "<td>".$row['유입BOD(mg/L)평균']."</td>";
	echo "<td>".$row['방류BOD(mg/L)평균']."</td>";
	echo "<td>".$row['평균 처리효율(%)']."</td>";
	echo "<td>".$row['유입COD(mg/L)평균']."</td>";
	echo "<td>".$row['방류COD(mg/L)평균']."</td>";
	echo "<td>".$row['유입SS(mg/L)평균']."</td>";
	echo "<td>".$row['방류SS(mg/L)평균']."</td>";
	echo "<td>".$row['유입T-N(mg/L)평균']."</td>";
	echo "<td>".$row['방류T-N(mg/L)평균']."</td>";
	echo "<td>".$row['유입T-P(mg/L)평균']."</td>";
	echo "<td>".$row['방류T-P(mg/L)평균']."</td>";
	echo "<td>".$row['방류대장균군수(개/mL)평균']."</td>";
	
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
	</div>

</body>
</html>