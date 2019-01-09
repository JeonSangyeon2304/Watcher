<?php
	header("content-type:text/html; charset=UTF-8");
	setcookie("user_id","",time() - 3600,"/"); //쿠키지우기
	$con = mysqli_connect("localhost", "root", "180101", "web");
	$query = "select * from COUNTER";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$cnt = $row[1] - 1;
	$que = "UPDATE COUNTER SET counter = '$cnt'";
	$ress = mysqli_query($con, $que);
	
?>

<script>
window.alert('로그아웃 되었습니다.');
location.href="../index.php";
</script>
