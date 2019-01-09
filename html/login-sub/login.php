<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>로그인</title>
	<link rel="stylesheet" type="text/css" href="../css/frame.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<div class="frame">
	<a href="../index.php" class="header-link">
	<div class="header">
		<div class="logo"></div>
	</div></a>
	<hr>
	<div class="container">
		<div class="nav nav-main">
			<ul class="nav-list">
      			<li class="nav-item">
				<?php
					if(!isset($_COOKIE["user_id"])){
				?>
						<a href="login.php" class="nav-link nav-link-main">문제선택</a>
				<?php
					} else {
				?>
						<a href="../match.php" class="nav-link nav-link-main">문제선택</a>
				<?php
					}
				?>
			</li>
       			<li class="nav-item">
				<?php
					if(!isset($_COOKIE["user_id"])){
				?>
						<a href="login.php" class="nav-link nav-link-main">내정보</a>
				<?php
					} else {
				?>
						<a href="../myinfo.php" class="nav-link nav-link-main">내정보</a>
				<?php
					}
				?>
			</li>
       			<li class="nav-item">
				<?php
					if(!isset($_COOKIE["user_id"])){
				?>
						<a href="login.php" class="nav-link nav-link-main">자유게시판</a>
				<?php
					} else {
				?>
						<a href="../freeboard-sub/freeboard.php" class="nav-link nav-link-main">자유게시판</a>
				<?php
					}
				?>
			</li>
       			<li class="nav-item">
				<?php
					if(!isset($_COOKIE["user_id"])){
				?>
						<a href="login.php" class="nav-link nav-link-main">Q&A</a>
				<?php
					} else {
				?>
						<a href="../question-sub/question.php" class="nav-link nav-link-main">Q&A</a>
				<?php
					}
				?>
			</li>
      		</ul>
		</div>
		<div class="nav nav-login">
				<ul class="nav-list">
					<li class="nav-item"><a href="login.php" class="nav-link">로그인</a></li>
				</ul>
		</div>
		<div class="contents contents-login">
			<h1>Log In</h1>
			<form action='./login_post.php' name='login' method='POST'>
			 	<fieldset class="field-login">
				 	<input class="input-login" type="text" name='user_id' maxlength="20" size="15" placeholder="id"><br>
				 	<input class="input-login" type="password" name='pw' maxlength="20" size="15" placeholder="password">
				 	&nbsp;&nbsp;&nbsp;
				 	<input class="input-login-btn" type="submit" name="login" value="login"><br><br>
				 	<a href="join.php">계정생성</a>
				 	&nbsp;|&nbsp;
				 	<a href="">아이디찾기</a>
				 	&nbsp;|&nbsp;
				 	<a href="">비밀번호찾기</a>
			 	 </fieldset>
			</form>
		</div>
	</div>
	<div class="footer">
		ㅎㅇㅎㅇ
	</div>
</body>
</html>
