<?php

	include '..lib/db-connect.php';
	$connect = dbconn();
 
$user_id=$_POST[user_id];
$name=$_POST[name];   
$nick_name=$_POST[nick_name];   
$birth=$_POST[birth];   
$sex=$_POST[sex];  
$tel=$_POST[tel];  
$email=$_POST[email]; 
$pws=$_POST[pw];  
$addr=$_POST[addr];  


if(!$user_id)Error("아이디를 입력하세요.");
if(substr($user_id,"12"))Error("회원아이디는 12자 까지만 허용됩니다.");
if(preg_match("/[^a-z 0-9]/",$user_id))Error("아이디는 영문소문자와 숫자만 가능합니다."); 

if(!$name)Error("이름을 입력하세요.");
if(strlen($name)<6 or strlen($name)>15)Error("이름은 2자에서 5섯자 까지 허용합니다."); //한글은 1자당 3byte

if(!$birth)Error("생년월일을 입력하세요.");
if(strlen($birth)<8 or strlen($birth)>8)Error("생년월일은 8자를 입력하세요.");

if(!$sex)Error("성별을 선택 하세요.");
if(!$tel)Error("연락처를 입력하세요.");
if(strlen($tel)<8 or strlen($tel)>15)Error("연락처는 최소8자리 부터 15자리 까지 입니다.");

if(!$email)Error("이메일을 입력하세요.");
if(!preg_match('/^[a-z\d][\w\d_\.-]+@[a-z\d][\w\d-]+[\.][a-z\.]{2,8}$/',$email)){
Error("이메일주소가 잘못되었습니다.");
}


if(!$pws)Error("비밀번호를 입력하세요.");
if(!$addr_1)Error("처음주소는 필수입니다.");

$pw=md5($pws);  //비밀번호 암호화


$query="insert into USER(user_id, name, nick_name, birth, sex, tel, email, pw, addr)
        values('$user_id', '$name', '$nick_name', '$birth', '$sex', '$tel', '$email','$addr')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>

window. alert('회원가입이 완료 되었습니다.');
location.href='../index.php';
</script>
