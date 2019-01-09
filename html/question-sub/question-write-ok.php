<?php
	$db = mysql_connect('localhost','root', '180101');
	if(!$db){
		die('MySQL connect ERROR:'.mysql_error());
	}

	$ret = mysql_select_db('web', $db);
	if(!$ret){
		die('MySQL select ERROR:'.mysql_error());
	}

	
	$title = $_POST[title];
	$content = $_POST[content];

	$user_id = $_COOKIE["user_id"];
	$write_time = date("Y:M:D");	
	
	$sql = "INSERT INTO q_and_a(q_title,q_text,q_user_id,q_write_time) VALUE('{$title}','{$content}','{$user_id}','{$write_time}')";
	$ret = mysql_query($sql);
	if($ret){
		echo "<script>alert('게시글 등록 완료');</script>";
	} else {
		echo "<script>alert('게시글 등록 실패');</script>";
	}
?>

<meta http-equiv='refresh' content="0;url='http://14.63.164.13/question-sub/question.php'">
