<?
include ("./lib/db-connect.php");
$connect= dbconn();
$member= member();
?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/frame.css?ver=2">
	<link rel="stylesheet" type="text/css" href="css/match.css?ver=2">
</head>
<body>
<div class="frame">
	<a href="./index.php" class="header-link">
		<div class="header">
			<div class="logo"></div>
		</div>
	</a>
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
					<li class="nav-item">
						<?php
							if(!isset($_COOKIE["user_id"])){ 
								echo '<a href="login-sub/login.php" class="nav-link">로그인</a>';
							}
							else {
								echo $_COOKIE["user_id"] ."님";
								echo '&nbsp;|&nbsp;<a href="login-sub/logout.php" class="nav-link">로그아웃</a>';
							}
						?>
					</li>
				</ul>
        	</div>
		<div class="contents contents-match">
		<div class="match-card-frame">
				<table class="match-card-table" style ="background-color : rgb(0,10,20); border: 2px solid black"><tr>
					<td><div class="match-card-num-part">1</div></td><?php $room="1"?>
					<td class="attack-effect" style = "border : 2px solid black">
						<?php
							$rule = "attack";
						?>
						<a href="room/fir/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class="match-card-link-part"><span style ="color:red; font-weight:bold">Attack</div>
						</a>
					</td>
					<td class="defence-effect" style ="border: 2px solid black">
						<?php
							$rule = "defence";
						?>
						<a href="room/fir/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class="match-card-link-part"><span style = "color:blue; font-weight:bold">Defence</div>
						</a>
					</td>
				</tr></table>
	
				<table class="match-card-table" style="background-color: rgb(0,20,40); border-style : ridge black"><tr>
					<td><div class="match-card-num-part">2</div></td><?php $room="2"?>
					<td class="attack-effect">
						<?php
							$rule = "attack";
						?>
						<a href="room/sec/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class="match-card-link-part"><span style = "color:red; font-weight:bold">Attack</div>
						</a>
					</td>
					<td class="defence-effect">
						<?php
							$rule = "defence";
						?>
						<a href="room/sec/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class="match-card-link-part"><span style = "color:blue; font-weight:bold">Defence</div>
						</a>
					</td>
				</tr></table>

				<table class="match-card-table" style="background-color: rgb(20,60,80)"><tr>
					<td><div class="match-card-num-part">3</div></td><?php $room="3"?>
					<td class="attack-effect">
						<?php
							$rule = "attack";
						?>
						<a href="room/thr/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class="match-card-link-part"><span style = "color:red">Attack</div>
						</a>
					</td>
					<td class="defence-effect">
						<?php
							$rule = "defence";
						?>
						<a href="room/thr/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class="match-card-link-part"><span style = "color:blue; font-weight:bold">Defence</div>
						</a>
					</td>
				</tr></table>
				<table class="match-card-table" style="background-color: rgb(40,70,90)"><tr>
					<td><div class ="match-card-num-part">4</div></td><?php $room="4"?>
					<td class ="attack-effect">
						<?php
							$rule = "attack";
						?>
						<a href ="room/fou/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class ="match-card-link-part"><span style = "color:red">Attack</div>
						</a>
					</td>
					<td class = "defence-effect">
						<?php
							$rule = "defence";
						?>
						<a href="room/fou/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class = "match-card-link-part"><span style = "color:blue; font-weight:bold">Defence</div>
						</a>
					</td>
				</tr></table>

				<table class = "match-card-table" style = "background-color : rgb(60,80,100)"><tr>
					<td><div class = "match-card-num-part">5</div></td><?php $room="5"?>
					<td class = "attack-effect">
						<?php
							$rule = "attack";
						?>
						<a href = "room/fiv/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class = "match-card-link-part"><span style = "color:red">Attack</div>
						</a>
					</td>
					<td class = "defence-effect">
						<?php
							$rule = "defence";
						?>
						<a href = "room/fiv/ready.php?room=<?php echo $room;?>&rule=<?php echo $rule?>">
							<div class = "match-card-link-part"><span style = "color:Blue; font-weight:bold">Defence</div>
						</a>
					</td>
				</tr></table>

		</div>
	
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</div>
	</div>
	</div>
	<div class="footer">
		Watcher
	</div>
</body>
</html>

