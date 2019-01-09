<?php
	$db = mysql_connect('localhost', 'root', '180101');
	if(!$db){
		die('MySQL connect ERROR:'.mysql_error());
	}
	
	$ret = mysql_select_db('web', $db);
	if(!$ret){
		die('MySQL select ERROR:'.mysql_error());
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>글쓰기 : 자유게시판</title>
	<link rel="stylesheet" type="text/css" href="../css/frame.css">
	<link rel="stylesheet" type="text/css" href="../css/freeboard-write.css">
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
      			<li class="nav-item"><a href="../match.php" class="nav-link nav-link-main">문제선택</a></li>
       			<li class="nav-item"><a href="../myinfo.php" class="nav-link nav-link-main">내정보</a></li>
       			<li class="nav-item"><a href="../freeboard-sub/freeboard.php" class="nav-link nav-link-main">자유게시판</a></li>
       			<li class="nav-item"><a href="../question-sub/question.php" class="nav-link nav-link-main">Q&A</a></li>
      		</ul>
		</div>
		<div class="nav nav-login">
				<ul class="nav-list">
					<li class="nav-item">
						<?php
							if(!isset($_COOKIE["user_id"])){
								echo '<a href="../login-sub/login.php" class="nav-link">로그인</a>';
							} else {
								echo $_COOKIE["user_id"]."님";
								echo '&nbsp;|&nbsp;<a href="../login-sub/logout.php" class="nav-link">로그아웃</a>';
							}
						?>
					</li>
				</ul>
		</div>
		<div class="contents">
			<form id="write" action="freeboard-write-ok.php" method="post" onsubmit="return formCheck();"  autocomplete="off">
				<input type="text" name="title" class="input-info" placeholder="제목"><br>
				<textarea name="content" class="input-main" maxlength="2000"></textarea>
				<br>
				<input type="submit" value="저장" class="submit">
			</form>
			<script>
				function formCheck(){
					var title =	document.getElementById('write').title.value;
					var writer = document.getElementById('write').writer.value;
					var regdate =	document.getElementById('write').regdate.value;
					var content = document.getElementById('write').content.value;

					if(title==null || title == "") {
						alert('제목을 입력하세요');
						document.getElementById('write').title.focus();
						return false;
					}
					if(content==null || content == "") {
						alert('내용을 입력하세요');
						document.getElementById('write').content.focus();
						return false;
					}
				}
			</script>
		</div>
	</div>
	<div class="footer">
		ㅎㅇㅎㅇ
	</div>
</body>
</html>
