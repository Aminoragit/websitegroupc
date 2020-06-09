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



$sql = "SELECT * FROM `datatable` ";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
  echo '<h2>'.$row['COL 1'].'</h2>';
  echo $row['COL 2'];
}
?>