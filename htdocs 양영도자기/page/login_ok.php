<?
	include "../include/lib.php";
	
// 변수저장
	$id = $_POST['id'];
	$pw = md5($_POST['pw']);
	
	$query = "select * from member where uid='$id' and upw='$pw'";
	$result = mysql_query($query, $connect);
	$data = mysql_fetch_assoc($result);//array함수는 [0],[1]로도 저장되지만 assoc는 필드명만, 서버부하줄이기
	
	if($data){
		$_SESSION['name'] = $data['uname'];
		$_SESSION['lv'] = $data['ulv'];
		$_SESSION['id'] = $data['uid'];
		
		alertmove("로그인성공", "http://localhost/index.php");
	}else{
		alertmove("아이디 또는 비밀번호가 맞지 않습니다");
	}
	 
?>