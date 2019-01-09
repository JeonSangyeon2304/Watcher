<?php
	$db = mysql_connect('localhost', 'root', '180101');
	if(!$db) {
		die('MySQL connect ERROR:'.mysql_error());
	}
	
	$ret = mysql_select_db('web', $db);
	if(!$ret){
		die('MySQL select ERROR:'.mysql_error());
	}
?>
<html>
<head>
	<title></TITLE>
	<meta http-equiv="Content-type" content="text/html; charset =UTF-8" />
	<link type ='text/css' href= 'css/frame.css' rel='stylesheet'>
	<link type ="text/css" href= "css/index.css?ver=3" rel="stylesheet">
</head>
<body>
<div class="frame">
	<a href="index.php" class="header-link">
	<div class="header">
		<div class="logo"></div>
	</div></a>
	<hr>
	<div class="container">
		<div class="nav nav-main">
			<ul class="nav-list">
				<li class="nav-item">
					<?php
						if(!isset($_COOKIE["user_id"])) {
					?>
							<a href="login-sub/login.php" class="nav-link nav-link-main">문제선택</a>
					<?php
						}else{
					?>	
							<a href="match.php" class="nav-link nav-link-main">문제선택</a>
					<?php
						}
					?>
				</li>
				<li class="nav-item">
					<?php
						if(!isset($_COOKIE["user_id"])) {
					?>
							<a href="login-sub/login.php" class="nav-link nav-link-main">내정보</a>
					<?php
						}else{
					?>	
							<a href="myinfo.php" class="nav-link nav-link-main">내정보</a>
					<?php
						}
					?>
				</li>
				<li class="nav-item">
					<?php
						if(!isset($_COOKIE["user_id"])) {
					?>
							<a href="login-sub/login.php" class="nav-link nav-link-main">자유게시판</a>
					<?php
						}else{
					?>	
							<a href="freeboard-sub/freeboard.php" class="nav-link nav-link-main">자유게시판</a>
					<?php
						}
					?>
				</li>
				<li class="nav-item">
					<?php
						if(!isset($_COOKIE["user_id"])) {
					?>
							<a href="login-sub/login.php" class="nav-link nav-link-main">Q&A</a>
					<?php
						}else{
					?>	
							<a href="question-sub/question.php" class="nav-link nav-link-main">Q&A</a>
					<?php
						}
					?>
				</li>
			</ul>
		</div>
		<div class="nav nav-login">
				<ul class="nav-list">
					<li class="nav-item">
						<?php
							if(!isset($_COOKIE["user_id"])) {
								echo '<a href="login-sub/login.php" class="nav-link">로그인</a>';
							}
							else {
								echo $_COOKIE["user_id"]. "님";
								echo '&nbsp;|&nbsp;<a href="login-sub/logout.php" class="nav-link">로그아웃</a>';
							}
						?>
					</li>
				</ul>
		</div>
		<div class="contents">
			<div class="contents-left-layout">
				<div class="intro">
					<div class="subtitle">Introduce</div>
					<div class="in-left-layout">
						이 사이트는 공격자 vs 방어자를 매칭하여 진행하는<br> security practice 사이트 입니다.<br>	
						<br>
						로그인 후<br> 문제 선택에서
						문제 및 포지션을 선택하세요.<br>
						<br>
						점수 및 푼 문제는 내정보에서 확인할 수 있습니다.<br>
					</div>
				</div>
			</div>
			<div class="contents-right-layout">
				<div class="notice">
					<div class="subtitle">Notice</div>
					<div class="in-right-layout">
						18/10/10 서버 이동함<br><br>
					</div>
				</div>
				<div class="rank">
					<div class="subtitle">Rank</div>
					<div class="in-right-layout">
						<?php
							// 1등 점수
							$sql = "select max(score) from USER";
							$ret = mysql_query($sql);
							$max_score = mysql_result($ret, 0);		

							// 1등 닉네임 & id
							$sql = "select nick_name, user_id from USER where (score=$max_score)";
							$ret = mysql_query($sql);
							$rank1people = mysql_result($ret, 0);
							
							// 2등 점수	
							$sql = "select max(score) from USER where ( score < $max_score)";
							$ret = mysql_query($sql);
							$second_max_score = mysql_result($ret, 0);

							// 2등 닉네임 & id
							$sql = "select nick_name, user_id from USER where (score=$second_max_score)";
							$ret = mysql_query($sql);
							$rank2people = mysql_result($ret, 0);

							// 3등 점수
							$sql = "select max(score) from USER where ( score < $second_max_score)";
							$ret = mysql_query($sql);
							$third_max_score = mysql_result($ret, 0);

							// 3등 닉네임 & id
							$sql = "select nick_name, user_id from USER where (score=$third_max_score)";
							$ret = mysql_query($sql);
							$rank3people = mysql_result($ret, 0);
						?>
						<table style="color:rgb(140,140,140)">
							<tr>
								<td>rank 1</td>
								<td><?php
									if ($max_score != 0){
										echo ''.$rank1people;
								?></td>
								<td><?php
										echo ''.$max_score."점";		
									}
								?><td>
							</tr>
							<tr>
								<td>rank 2</td>
								<td><?php
									if ($second_max_score != 0){
										echo ''.$rank2people;
								?></td>
								<td><?php
										echo ''.$second_max_score."점";
									}
								?></td>
							</tr>
							<tr>
								<td>rank 3</td>
								<td><?php
									if ($third_max_score != 0){
										echo ''.$rank3people;
								?></td>
								<td><?php
										echo ''.$third_max_score."점";	
									}
								?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		ㅎㅇㅎㅇ
	</div>
<!--
<tr>
<td width='100%' height='30' align='middle' valign='middle' bgcolor='#452403'>
&nbsp; 
<a href=''><font color='ffffff'>[채팅방]</font></a>
&nbsp;
<a href='test.php'><font color='ffffff'>[매칭하러 가기]</font></a>
&nbsp;
<a href='./board/bbs1/list.php'><font color='FFFFFF'>[자유게시판]</font></a>
&nbsp;
<a href=''><font color='ffffff'>[내 정보]</font></a>
&nbsp;
<a href=''><font color='ffffff'>[QnA]</font></a>
</td>

<tr>
<td width='100%' height='100%' align='center' bgcolor='#FFFFFF'>&nbsp;</td>

</tr>
</table>
</TD>
</TR>
</TABLE>
-->
</body>
</html>
