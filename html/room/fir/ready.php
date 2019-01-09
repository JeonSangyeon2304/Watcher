<?php
	/*echo $_COOKIE["ids_mem"];
	print($_COOKIE["rule"]);
	print($_COOKIE["room"]);*/
	// 만약 매칭이 되면 룰과 방 맴버수를 초기화 한다
	$db = mysqli_connect('localhost','root', '180101', 'web');
	if(!$db){
		die('MySQL connect ERROR:'.mysql_error());
	}

	$user_id = $_COOKIE["user_id"];
	$room = $_GET['room'];
	$rule = $_GET['rule'];	

	// 만약 room 테이블에 room과 rule이 같은 레코드가 있으면 입장실패
	$sql = "SELECT COUNT(position) FROM room WHERE page = '$room' AND position = '$rule' ";
	$res = mysqli_query($db, $sql);
	$test = mysqli_fetch_array($res);
	$num = $test[0];
	if($num == 0) {
		$non = "INSERT INTO room (user_id, page, position) value ('{$user_id}','{$room}','{$rule}')";
		$res = mysqli_query($db, $non);
		$test = mysqli_fetch_array($res);
		$query = "SELECT COUNT(page) FROM room WHERE page = '$room'";
		$result = mysqli_query($db,$query);
		$test = mysqli_fetch_array($res);
		$num2 = $test[0];
		print "<script language=javascript> alert('접속사를 대기중입니다. 잠시만 기다려 주십시오.');</script>";
		while(1) {
	                $query = "SELECT COUNT(page) FROM room WHERE page = '$room'";
	                $result = mysqli_query($db,$query);
        	        $test = mysqli_fetch_array($result);
                	$num2 = $test[0];
			if($num2 == 2) {
				break;
			}
			//print "<script language=javascript> alert('접속자를 대기중입니다. 잠시만 기다려 주십시오.');</script>";
		}
		if($rule == "attack") {
			print "<script language=javascript> alert('입장합니다.'); location.replace('./attack/room.php'); </script>";
		}
		else if($rule == "defence") {
			print "<script language=javascript> alert('입장합니다.'); location.replace('./defence/room.php'); </script>";
		}

	}
	else {
		print "<script language=javascript> alert('방이 꽉 찼습니다. 대기하셔야 합니다.'); history.back(-2); </script>";
	}
?>
