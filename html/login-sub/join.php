<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset = utf-8" />
	<title>회원가입</title>
	<link type ='text/css' href= '../css/frame.css' rel='stylesheet'>
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
      			<li class="nav-item"><a href="../match.php" class="nav-link nav-link-main">매칭선택</a></li>
       			<li class="nav-item"><a href="../myinfo.html" class="nav-link nav-link-main">내정보</a></li>
       			<li class="nav-item"><a href="../freeboard.html" class="nav-link nav-link-main">자유게시판</a></li>
       			<li class="nav-item"><a href="../question.html" class="nav-link nav-link-main">Q&A</a></li>
      		</ul>
		</div>
		<div class="nav nav-login">
				<ul class="nav-list">
					<li class="nav-item">로그인</li>
				</ul>
		</div>
		<div class="contents">
				 <h1>회원가입</h1>
				 <form action='./join_pos.php' name='member' method='post'>
					<!--<input type='hidden' name='id' value='test'> -->
					회원아이디: <input type='text' name='user_id' size='10'> 
					<br><br>
					이름: <input type='text' name='name' size='10'> &nbsp; &nbsp; &nbsp;
					 닉네임: <input type='text' name='nick_name' size='10'>
					<br><br>
					생년월일: <input type='text' name='birth' size='10'> &nbsp; &nbsp; &nbsp;
					성별: <input type='radio' name='sex' value="male">남자&nbsp; &nbsp; 
						 <input type='radio' name='sex' value="female">여자
					<br><br>
					연락처: <input type='text' name='tel' size='10'> &nbsp; &nbsp;
					 이메일 <input type='text' name='email' size='10'>
					<br><br>
					비밀번호: <input type='password' name='pw' size='10'> 
					<br><br>
					주소: <input type='text' name='addr' size='15'>&nbsp; &nbsp; 
					<br><br>
					<input type='submit' value='가입하기'>
				</form>
		</div>
	</div>
	<div class="footer">
		ㅎㅇㅎㅇ
	</div>
</body>
</html>
