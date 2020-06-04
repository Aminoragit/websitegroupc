<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MysqlDB 연동</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>@import "compass/css3";
	$dark: #35414a;
	$semilight: #86919a;
$blue: #5aafee;
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
@font-face {
  font-family: pfs-bold;
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/PFSquareSansPro-Bold.otf');
}
body {
  background: $dark;
}
.drop {
  width: 20em;
  margin: 5em auto;
  font-family: pfs-bold;
  color: $semilight;
  text-transform: uppercase;
  position: relative;
  transition: width 0.5s;
  will-change: width;
  
  .option {
    padding: 1em;
    cursor: pointer;
    background-color: #485761;
    
    &:not(.active) {
      display: none;
      opacity: 0;
      transform: translateY(-50%);
    }
  }
  
  &.visible {
    animation: bounce 1s;
    width: 24em;
    
    &:before, &:after {
      border-color: #fff;
    }
    &:before {
      opacity: 0;
    }
    &:after {
      opacity: 1;
    }
    
    .option {
      color: #fff;
      display: block;
    }
  }
  
  &.opacity {
    
    .option {
      transform: translateZ(0);
      opacity: 1;
      
      @for $i from 0 to 10 {
        &:nth-child(#{$i}) {
          transition: opacity 0.5s 0.1s*$i, transform 0.5s 0.1s*$i;
        }
      }
    }
  }

&.withBG {
  
  .option {
    transition: background-color 0.1s;

    &:not(.placeholder):hover {
      background-color: $blue;
    }

    &:not(.placeholder).active {
      background-color: $blue;
    }
  }
}
  
  &:after, &:before {
    content: "";
    position: absolute;
    top: 1.5em;
    right: 1em;
    width: 0.75em;
    height: 0.75em;
    border: 0.2em solid $semilight;
    transform: rotate(45deg);
    transform-origin: 50% 50%;
    transition: opacity 0.2s;
  }
  &:before {
    border-left: none;
    border-top: none;
    top: 1.2em;
  }
  &:after {
    border-right: none;
    border-bottom: none;
    opacity: 0;
  }
}

.mini-hack {
  opacity: 0;
  transform: translateY(-50%);
}</style>
<script>
	$(document).ready(function() {
		$(".drop .option").click(function() {
			var val = $(this).attr("data-value"),
			$drop = $(".drop"),
			prevActive = $(".drop .option.active").attr("data-value"),
			options = $(".drop .option").length;
			$drop.find(".option.active").addClass("mini-hack");
			$drop.toggleClass("visible");
			$drop.removeClass("withBG");
			$(this).css("top");
			$drop.toggleClass("opacity");
			$(".mini-hack").removeClass("mini-hack");
			if ($drop.hasClass("visible")) {
				setTimeout(function() {
					$drop.addClass("withBG");
				}, 400 + options*100);
			}
			triggerAnimation();
			if (val !== "placeholder" || prevActive === "placeholder") {
				$(".drop .option").removeClass("active");
      $(this).addClass("active");
    };
  });
  
  function triggerAnimation() {
    var finalWidth = $(".drop").hasClass("visible") ? 22 : 20;
    $(".drop").css("width", "24em");
    setTimeout(function() {
      $(".drop").css("width", finalWidth + "em");
    }, 400);
  }
});

</script>
<script>
	$(document).ready(function() {
    $('#mytableresult').DataTable({
    	bAutoWidth: true, //자동너비
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
     			$amount.val(`값${ui.values[0]} - 값${ui.values[1]}`);
      			$min.val(ui.values[0]);
			    $max.val(ui.values[1]);
    		}
		});

		$amount.val("값" + $slider.slider("values", 0) + " - $" + $slider.slider("values", 1));//표시되는 값
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
 	<div class="drop">
  <div class="option active placeholder" data-value="placeholder">
    Choose wisely
  </div>
  <div class="option" data-value="wow">
    Wow!
  </div>
  <div class="option" data-value="drop">
    So dropdown!
  </div>
  <div class="option" data-value="select">
    Very select!
  </div>
  <div class="option" data-value="custom">
    Much custom!
  </div>
  <div class="option" data-value="animation"> 
    Such animation!
  </div>
</div>
 	<form method="POST" action="datatablej.php">
						<div id="TB_search">
							<div>
								<div>
								
										
										<table border="1" width="700px" style="width: 80%; padding:10px; margin-left: 30px;margin-left: 10%;" data-aos-duration="1500"><th>⊙검색조건: &nbsp;&nbsp;
												
								<span id="divStartYear">
													<select name="area" class="select area" id="area">
													<option disabled="" selected="" hidden="">생태구역</option>
													<option value="전체">전체</option>
													<option value="동해">동해</option>
													<option value="제주">제주</option>
													<option value="대한해협">대한해협</option>
													<option value="서남해역">서남해역</option>
													<option value="서해중부">서해중부</option>
												</select>&nbsp;&nbsp;&nbsp;
												<span>
												<select name="grade" class="select grade" id="grade">
													<option disabled="" selected="" hidden="">해수수질기준</option>
													<option value="전체">전체</option>
													<option value="1등급">1</option>
													<option value="2등급">2</option>
													<option value="3등급">3</option>
													<option value="4등급">4</option>
													<option value="5등급">5</option>
												</select>&nbsp;&nbsp;&nbsp;
											</span>
												<select name="Year" class="select year" id="year">
													<option disabled="" selected="" hidden="">년월</option>
													<option value="전체">전체</option>
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
													<option value="201902">201902</option>
													<option value="201905">201905</option>
													<option value="201908">201908</option>
													<option value="201911">201911</option>
												</select>&nbsp;&nbsp;&nbsp;
											</span>
						</div>
					</div>
    <Br>	
   <br> 표층수온 : &nbsp;<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="slide-value" />  
      <input type="hidden" id="min" value="-2" name='min'/>
      <input type="hidden" id="max" value="32"name='max' />
      <div id="slider-range" style="width: 500px;" ></div><br>
     						

     <input type="submit" name="submit" value="검색" align="center"/><br><br> <!--입력한 검색조건 php로 전달하기-->
  </form>


	<?php
	 $year=(int)$_POST['Year'];
	 $area=(string)$_POST['area'];
	 $grade=(string)$_POST['grade'];
	 $min_value=(float)$_POST['min']; //표층수온 최소값
	 $max_value=(float)$_POST['max']; //표층수온 최대값
	 
	 echo "년월 : "."$year"."<br/>";
	 echo "생태구역 : "."$area"."<br/>";
	 echo "해수수질기준 : "."$grade"."<br/>";
	 echo "표층수온 최소값 : ".$min_value."<br/>"; //출력값 확인용
	 echo "표층수온 최대값 : ".$max_value."<br/>"."<br/>";
	 ?>
										</div>	
									</th>	
									  </div>
								</table>

    <h4>MySQL에 저장된 데이터는 아래와 같습니다.</h4><br>
    <!--입력값으로 검색하기-->

	<?php
	 $year=(int)$_POST['Year'];
	 $area=(string)$_POST['area'];
	 $grade=(string)$_POST['grade'];
	 $min_value=(float)$_POST['min']; //표층수온 최소값
	 $max_value=(float)$_POST['max']; //표층수온 최대값
	 
 	 if(!empty( $year )){
        $sql_template = "SELECT * FROM `datatable` WHERE `년월`= %d AND `표층수온`>%f AND `표층수온`<%f AND `생태구역`= '%s'"; //%d는 정수형,%f는 실수형
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
