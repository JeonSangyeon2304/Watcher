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
	<title>자유게시판</title>
	<link rel="stylesheet" type="text/css" href="../css/frame.css?ver=1">
	<link rel="stylesheet" type="text/css" href="../css/freeboard.css?ver=1">
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
       			<li class="nav-item"><a href="freeboard.php" class="nav-link nav-link-main">자유게시판</a></li>
       			<li class="nav-item"><a href="../question-sub/question.php" class="nav-link nav-link-main">Q&A</a></li>
      		</ul>
		</div>
		<div class="nav nav-login">
				<ul class="nav-list">
<?php
                                                        if(!isset($_COOKIE["user_id"])) {
                                                                echo '<a href="../login-sub/login.php" class="nav-link">로그인</a>';
                                                        }
                                                        else {
                                                                echo $_COOKIE["user_id"]. "님";
                                                                echo '&nbsp;|&nbsp;<a href="../login-sub/logout.php" class="nav-link">로그아웃</a>';
                                                        }
                                                ?>
				</ul>
		</div>
		<div class="contents freeboard-contents">
				<div class="add-box">
					<button class="add-box-btn">내  글</button>
					<a href="../freeboard-sub/freeboard-write.php" style="width:60px">
						<button class="add-box-btn">글쓰기</button>
					</a>
					<input class="search-text" type="text" maxlength="200" size="50">
					<button class="add-box-btn">검색</button>
				</div>
				<?php
				/*
				<table class="table-freeboard">
					<tr>
						<th>num</th>
						<th>제목</th>
						<th>작성자</th>
						<th>작성일</th>
						<th>조회수</th>
					</tr>
					<?php
						$resource = mysql_query("select * from freeboard");
						// board 테이블의 데이터 개수 저장
						$total_len = mysql_num_rows($resource);

						if(isset($_GET[idx]) ){
							$start = $_GET[idx] * 10;
							
							$sql = "select * from freeboard order by no desc limit $start, 10";
						} else {
							$sql = "select * from freeboard order by no desc limit 10";
						}

						$resource = mysql_query($sql);
						$num=1;
						while($row = mysql_fetch_assoc($resource)){
							print "<tr>";
							echo "<th> $num </th>";
							print "<td> $row[title]</td>";
							print "<td> $row[user_id]</td>";
							print "<td> $row[write_time]</td>";
							print "</tr>";

							$num++;
						}

						// 게시글 목록 페이지 개수(count) = 총 게시글수 / 10 한다
						$count = (int)($total_len / 10);
						// 마지막 게시글 목록의 게시글 개수가 1개 이상, 10개 이하인 경우 게시글 목록개수 +1
						if($total_len % 10){ $count++; }
						
						print "<tr>";
						print "<td colspan=5 align=center>";
						for($i=0; $i<$count; $i++){
							print "<a href=http://14.49.39.164/freeboard-sub/freeboard.php?idx={$i} class=nav-link>";
							$j = $i + 1;
							print "{$j}";
							print "</a>&nbsp;&nbsp;";
						}
						print "</td>";
						print "</tr>";
					?>
				</table>
				*/
				?>
		</div>
	</div>
	<div class="footer">
		ㅎㅇㅎㅇ
	</div>
</body>
</html>
