<?

//DB����
	$connect = mysql_connect("localhost","root","apmsetup");
	mysql_select_db("pottery", $connect);
	
//SESSION����
	session_start();
	
//ģȭ��URL
	$e = explode("/", $_SERVER['REQUEST_URI']);
	$_GET['property'] = $e[3];
	$_GET['main_id'] = $e[4];
	$_GET['sub_id'] = $e[5];
	$_GET['no'] = $e[6];


//���â �� �������̵�
	function alertmove($msg, $link=""){
		echo "<script type='text/javascript'>";
			echo "alert('$msg');";
			echo $link? "document.location.href='$link'" : "history.back();";
		echo "</script>";
	}


//������ �̵�
	function movepage($link=""){
		echo "<script type='text/javascript'>";
			echo $link? "document.location.href='$link'" : "history.back();";
		echo "</script>";
	}


//Ȯ��â
	function confirm($msg){
		echo "<script type='text/javascript'>";
			echo "confirm($msg);";
		echo "</script>";
	}


//����üũ
	function file_chk($file, $pro){
		$cut = explode(".", strrev($file));
		$str = strrev($cut[0]);
		
		if($pro == "gallery"){
			$array = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF", "bmp", "BMP");
			if(!in_array($str, $array)){alertmove("�̹������ϸ� ���ε� �����մϴ�"); exit();}
		}else{
			$array = array("php", "PHP", "asp", "ASP", "jsp", "JSP", "html", "HTML", "htm", "HTM", "js", "JS");
			if(in_array($str, $array)){alertmove("���Ȼ� ������ ���ε��Ͻ� �� �����ϴ�"); exit();}
		}
		return $str;
	}



	
?>