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
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/frame.css?ver=2">
	<link rel="stylesheet" type="text/css" href="css/myinfo.css?ver=2">
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
      			<li class="nav-item"><a href="match.php" class="nav-link nav-link-main">문제선택</a></li>
       			<li class="nav-item"><a href="myinfo.php" class="nav-link nav-link-main">내정보</a></li>
       			<li class="nav-item"><a href="freeboard-sub/freeboard.php" class="nav-link nav-link-main">자유게시판</a></li>
       			<li class="nav-item"><a href="question-sub/question.php" class="nav-link nav-link-main">Q&A</a></li>
      		</ul>
		</div>
		<div class="nav nav-login">
				<ul class="nav-list">
					<?php
							if(!isset($_COOKIE["user_id"])) {
								echo '<a href="login-sub/login.php" class="nav-link">로그인</a>';
							}
							else {
								echo $_COOKIE["user_id"]. "님";
                                                                echo '&nbsp;|&nbsp;<a href="login-sub/logout.php" class="nav-link">로그아웃</a>';
							}
						?>

				</ul>
		</div>
		<div class="contents">
				<div class="score">
					score&nbsp;&nbsp;
					<?php
						$user_id = $_COOKIE["user_id"];
					
						$sql = "select score from USER where user_id='$user_id'";
						$ret = mysql_query($sql);
						$score = mysql_result($ret, 0);
						
						print "<span style=\"font-size:230%\">".$score."<span>";
					?>
				</div><br>
			        <div class="solved-Q">
					<div class="privacy">푼 문제</div>
					<table class="solved-Q-table" cellspacing="0">
						<tr>
							<td class="odd-line">
								<?php
									$sql = "select one from USER where user_id='$user_id'";
									$ret = mysql_query($sql);
									$pass = mysql_result($ret, 0);
									if($pass!=0) print "problem 1";
								?>	
							</td>
							<td class="odd-line">
								<?php
									if($pass!=0) print "배점";	
								?>
							</td>
							<td class="odd-line">
								<?php
									if($pass!=0) print "20";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									$sql = "select two from USER where user_id='$user_id'";
									$ret = mysql_query($sql);
									$pass = mysql_result($ret, 0);
									if($pass!=0) print "problem 2";
								?>	
							</td>
							<td>
								<?php
									if($pass!=0) print "배점";	
								?>
							</td>
							<td>
								<?php
									if($pass!=0) print "20";
								?>
							</td>
						</tr>
						<tr>
							<td class="odd-line">
								<?php
									$sql = "select three from USER where user_id='$user_id'";
									$ret = mysql_query($sql);
									$pass = mysql_result($ret, 0);
									if($pass!=0) print "problem 3";
								?>	
							</td>
							<td class="odd-line">
								<?php	if($pass!=0) print "배점";	?>
							</td>
							<td class="odd-line">
								<?php   if($pass!=0) print "20";	?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									$sql = "select four from USER where user_id='$user_id'";
									$ret = mysql_query($sql);
									$pass = mysql_result($ret, 0);
									if($pass!=0) print "problem 4";
								?>	
							</td>
							<td>
								<?php
									if($pass!=0) print "배점";	
								?>
							</td>
							<td>
								<?php
									if($pass!=0) print "20";
								?>
							</td>
						</tr>
						<tr>
							<td class="odd-line">
								<?php
									$sql = "select five from USER where user_id='$user_id'";
									$ret = mysql_query($sql);
									$pass = mysql_result($ret, 0);
									if($pass!=0) print "problem 5";
								?>	
							</td>
							<td class="odd-line">
								<?php
									if($pass!=0) print "배점";	
								?>
							</td>
							<td class="odd-line">
								<?php
									if($pass!=0) print "20";
								?>
							</td>
						</tr>
					</table>
				</div><br><br><br>
				<div class="privacy">
					<p>계정정보</p>
					<p style="padding-left: 50px">
						<table class="privacy-table">
							<tr>
								<td>name</td>
								<td>
									<?php 
										$sql = "select name from USER where user_id='$user_id'"; 
										$ret = mysql_query($sql);
										$name = mysql_result($ret, 0);
										echo $name;
									?>
								</td>
							</tr>
							<tr>
								<td>nick name</td>
								<td>
									<?php 
										$sql = "select nick_name from USER where user_id='$user_id'"; 
										$ret = mysql_query($sql);
										$nick_name = mysql_result($ret, 0);
										echo $nick_name;
									?>
								</td>
							</tr>
							<tr>
								<td>id</td>
								<td>
									<?php echo $_COOKIE["user_id"] ?>
								</td>
							</tr>
						</table>
					</p>
			        </div>
		</div>
	</div>
	<div class="footer">
		ㅎㅇㅎㅇ
	</div>
</body>
</html>
