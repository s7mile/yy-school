<?

//DB연결
	$connect = mysql_connect("localhost","root","apmsetup");
	mysql_select_db("pottery", $connect);
	
//SESSION연결
	session_start();
	
//친화적URL
	$e = explode("/", $_SERVER['REQUEST_URI']);
	$_GET['property'] = $e[3];
	$_GET['main_id'] = $e[4];
	$_GET['sub_id'] = $e[5];
	$_GET['no'] = $e[6];


//경고창 후 페이지이동
	function alertmove($msg, $link=""){
		echo "<script type='text/javascript'>";
			echo "alert('$msg');";
			echo $link? "document.location.href='$link'" : "history.back();";
		echo "</script>";
	}


//페이지 이동
	function movepage($link=""){
		echo "<script type='text/javascript'>";
			echo $link? "document.location.href='$link'" : "history.back();";
		echo "</script>";
	}


//확인창
	function confirm($msg){
		echo "<script type='text/javascript'>";
			echo "confirm($msg);";
		echo "</script>";
	}


//파일체크
	function file_chk($file, $pro){
		$cut = explode(".", strrev($file));
		$str = strrev($cut[0]);
		
		if($pro == "gallery"){
			$array = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF", "bmp", "BMP");
			if(!in_array($str, $array)){alertmove("이미지파일만 업로드 가능합니다"); exit();}
		}else{
			$array = array("php", "PHP", "asp", "ASP", "jsp", "JSP", "html", "HTML", "htm", "HTM", "js", "JS");
			if(in_array($str, $array)){alertmove("보안상 파일을 업로드하실 수 없습니다"); exit();}
		}
		return $str;
	}



	
?>