<?
include ("./lib/db-connect.php");
$connect= dbconn();
$member= member();
?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://14.63.164.13/css/frame.css?ver=2">
	<link rel="stylesheet" type="text/css" href="../../css/room.css">
</head>
<body>
<div class="frame">
	<a href="http://14.63.164.13/index.php" class="header-link">
		<div class="header">
			<div class="logo"></div>
		</div>
	</a>
	<hr>
	<div class="container">
		<div class="nav nav-main">
			<ul class="nav-list">
				<li class="nav-item"><a href="http://14.63.164.13/match.php" class="nav-link nav-link-main">문제선택</a></li>
				<li class="nav-item"><a href="http://14.63.164.13/myinfo.php" class="nav-link nav-link-main">내정보</a></li>
				<li class="nav-item"><a href="http://14.63.164.13/freeboard-sub/freeboard.php" class="nav-link nav-link-main">자유게시판</a></li>
				<li class="nav-item"><a href="http://14.63.164.13/question-sub/question.php" class="nav-link nav-link-main">Q&A</a></li>
			</ul>
		</div>
		<div class="nav nav-login">
			<ul class="nav-list">
				<li class="nav-item">
					<?php
						if(!isset($_COOKIE["user_id"])){ 
							echo '<a href="http://14.63.164.13/login-sub/login.php" class="nav-link">로그인</a>';
						}
						else {
							echo $_COOKIE["user_id"] ."님";
							echo '&nbsp;|&nbsp;<a href="http://14.63.164.13/login-sub/logout.php" class="nav-link">로그아웃</a>';
						}
					?>
				</li>
			</ul>
		</div>
		<div class="contents">
			<br>
			<div class ="console-box" style="width:790px;overflow:hidden; text-align:center;">
			 <iframe src="room-child-consolebox.php" width="800px" height="500px" scrolling="no" frameborder="0"
				 style="margin-left: 38px"></iframe>
			<br><br>
			<br><br>
		</div>
	</div>
</div>
<div class="footer">
	Watcher
</div>
</div>
</body>
</html>
