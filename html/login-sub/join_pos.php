<?php
$conn = mysqli_connect("localhost", "root", "180101", "web");
/*
function Error($msg) {
	echo "
	<script>
	window.alert('$msg');
	history.back(1);
	</script>
	";
	exit;
}
*/
if($conn)
	echo "db connect";
else 
	echo "not connect";

	$user_id=$_POST[user_id];
	

	if(!$user_id){
	echo " <script>
		window.alert('아이디를 입력하세요');
		history.back(1);
		</script>
		";
		exit;
	}
	


	$result = mysqli_query($conn, "insert into USER(user_id,pw,name,nick_name,birth,sex,tel,email,addr)
	 value('$_POST[user_id]','$_POST[pw]','$_POST[name]','$_POST[nick_name]','$_POST[birth]','$_POST[sex]','$_POST[tel]','$_POST[email]','$_POST[addr]')");


	mysqli_close($conn);
	?>


	<script>
	window.alert('회원가입이 완료되었습니다.');
	location.href='../index.php';
	</script>
