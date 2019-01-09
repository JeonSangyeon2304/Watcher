<?php
	$con = mysqli_connect("localhost", "root", "180101", "web");

	$user_id = $_POST[user_id];
	$pw = $_POST[pw];

	//회원정보 가져오기
	$query="select * from USER where user_id='$user_id'";
	$result= mysqli_query($con, $query);
	$member= mysqli_fetch_array($result);
	
	if(!$user_id) {
		echo "<script>alert(\"아이디를 입력하세요.\");
			location.href='./login.php';</script>";
	}
	elseif(!$member[user_id]) {
		echo "<script>alert(\"존재하지 않는 회원 아이디 입니다.\");
			location.href='./login.php';</script>";
	}
  

	if(!$pw) {
		echo "<script>alert(\"비밀번호를 입력하세요.\");
			location.href='./login.php';</script>";
	}
	elseif($member[pw]!=$pw) {
		echo "<script>alert(\"비밀번호가 같지 않습니다.\");
			location.href='./login.php';</script>";
	}

	if($member[user_id] and $member[pw]==$pw) { 
		$conn = mysqli_connect("localhost", "root", "180101", "web");
		$que = "select counter from COUNTER";
		$res = mysqli_query($conn, $que);
		$row = mysqli_fetch_array($res);
		$cnt = $row[0] + 1;
		$que = "UPDATE COUNTER SET counter = '$cnt'";
		$ress = mysqli_query($conn, $que);
		setcookie("user_id", $user_id, time() + 3600, '/'); 
		echo "<script>alert('로그인 되었습니다.');
			location.href='../index.php';
			</script>";

	}
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>
