<?
	include "../include/lib.php";
	
// 변수저장
	$uid = $_POST['uid'];
	$upw = md5($_POST['upw']);
	$uname = $_POST['uname'];
	$usex = $_POST['usex'];
	$uage = $_POST['uage'];
	$uaddress = $_POST['uaddress'];
	$ueamil = $_POST['uemail'];
	$uprofile = htmlspecialchars($_POST['uprofile']);
	$file = $_FILES[file]['tmp_name'];
	
	if(is_uploaded_file($file)){
		$file_name = $_FILES[file][name];
		$chk = file_chk($file_name, "gallery");
		$file_name2 = date("ymdhis")."_member.".$chk;
		move_uploaded_file($file, "../data/member_img/".$file_name2);
	}
	
	
	$query = "insert into member set uid='$uid', upw='$upw', uname='$uname', usex='$usex', uage='$uage', uaddress='$uaddress', uemail='$uemail', uprofile='$uprofile', file='$file_name', file_name='$file_name2', ulv='2'";
	mysql_query($query, $connect);
	
	alertmove("회원가입이 완료되었습니다", "http://localhost/index.php");
	
?>