<?
	include "../include/lib.php";
	
// ��������
	$id = $_POST['id'];
	$pw = md5($_POST['pw']);
	
	$query = "select * from member where uid='$id' and upw='$pw'";
	$result = mysql_query($query, $connect);
	$data = mysql_fetch_assoc($result);//array�Լ��� [0],[1]�ε� ��������� assoc�� �ʵ��, �����������̱�
	
	if($data){
		$_SESSION['name'] = $data['uname'];
		$_SESSION['lv'] = $data['ulv'];
		$_SESSION['id'] = $data['uid'];
		
		alertmove("�α��μ���", "http://localhost/index.php");
	}else{
		alertmove("���̵� �Ǵ� ��й�ȣ�� ���� �ʽ��ϴ�");
	}
	 
?>