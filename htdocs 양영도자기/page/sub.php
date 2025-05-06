<?
///////////////////////
// 서브페이지
// 작성자 : 이민정
// 날짜 : 2011.02.16
///////////////////////
include "../include/lib.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>▒양영도자기 입니다▒</title>
<script src="http://localhost/page/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="http://localhost/css/common.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="bg">
<div id="wrap">
	<div id="global">
    	<div class="mt15">
            <? if(!$_SESSION['name']){ ?>
					<a href="http://localhost/" title="홈">HOME</a>
                    <a href="http://localhost/page/sub.php/sitemap" title="사이트맵">SITEMAP</a>
                    <a href="http://localhost/page/sub.php/search" title="검색">SEARCH</a>
                    <a href="mailto:admin@pottery.com" title="메일보내기">CONTACT</a>
                    <a href="http://localhost/page/sub.php/login" title="로그인"><strong>LOGIN</strong></a>
					
            <? }else{
					echo $_SESSION['name']."님 환영합니다";
					if($_SESSION['lv'] == 1){ ?>
						<a href="http://localhost/page/sub.php/main_menu_list" title="CMS"><strong>[CMS]</strong></a>
						<a href="http://localhost/index" title="홈">HOME</a>
						<a href="http://localhost/page/sub.php/sitemap" title="사이트맵">SITEMAP</a>
						<a href="http://localhost/page/sub.php/search" title="검색">SEARCH</a>
						<a href="mailto:admin@pottery.com" title="메일보내기">CONTACT</a>
						<a href="http://localhost/page/logout" title="로그아웃"><strong>LOGOUT</strong></a>
				<? }else if($_SESSION['lv'] == 2){ ?>
						<a href="http://localhost/index" title="홈">HOME</a>
						<a href="http://localhost/page/sub.php/sitemap" title="사이트맵">SITEMAP</a>
						<a href="http://localhost/page/sub.php/search" title="검색">SEARCH</a>
						<a href="mailto:admin@pottery.com" title="메일보내기">CONTACT</a>
						<a href="http://localhost/page/logout" title="로그아웃"><strong>LOGOUT</strong></a>
			<? } } ?>
        </div>
    </div>
  	<div id="top">
    	<div id="logo">
        	<a href="http://localhost/index.php"><img class="ml30" src="http://localhost/image/logo.png" alt="양영도자기" /></a>
        </div>
        <div id="menu">
        	<div class="mt8">
				<? 	$m_query = "select * from main_menu order by od asc";
                    $m_result = mysql_query($m_query, $connect);
                        while($m_data = mysql_fetch_assoc($m_result)){
                            $s_query = "select * from sub_menu where main_id='$m_data[main_id]' order by od asc";
                            $s_result = mysql_query($s_query, $connect);
                            $s_data = mysql_fetch_assoc($s_result);
                                if($s_data[property] == "HTML"){
                                    $url = "sub";
                                }else if($s_data[property] == "board"){
                                    $url = "board";
                                }else if($s_data[property] == "apply"){
                                    $url = "apply";
                                }else{
                                    $url = "gallery";
                                }
                            echo "<a href='http://localhost/page/sub.php/$url/$s_data[main_id]/$s_data[sub_id]'><strong>$m_data[main_title]</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }if($_SESSION['lv']==1){ echo"<a href='http://localhost/page/sub.php/main_menu_list'><strong>CMS</strong></a>";} ?>
        	</div>
        </div>
 	</div>
    <div id="s_flash">
   	  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1000','height','181','src','http://localhost/flash/sub','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','http://localhost/flash/sub' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1000" height="181">
          <param name="movie" value="http://localhost/flash/sub.swf" />
          <param name="quality" value="high" />
  	  </object></noscript>
    </div>
  	<div id="s_history">
    </div>
    <div id="s_latest">
    	<div id="s_menu">
        	<div id="s_m_subject">
            	<div class="mt12">
            	<? 	$mm_query = "select * from main_menu where main_id = '$_GET[main_id]'";
					$mm_result = mysql_query($mm_query, $connect);
					$mm_data = mysql_fetch_assoc($mm_result);
						echo $mm_data[main_title]; ?>
                </div>
            </div>
            <div id="s_m_menu">
            	<?
					$smsquery = "select * from sub_menu where main_id = '$_GET[main_id]'";
					$smsresult = mysql_query($smsquery, $connect);
						while($smsdata = mysql_fetch_assoc($smsresult)){
							if($smsdata[property] == "HTML"){
                                $url = "sub";
                            }else if($smsdata[property] == "board"){
                            	$url = "board";
                            }else if($smsdata[property] == "apply"){
                                $url = "apply";
                            }else if($smsdata[property] == "gallery"){
                                $url = "gallery";
                            }
                            echo "<a href='http://localhost/page/sub.php/$url/$smsdata[main_id]/$smsdata[sub_id]'>$smsdata[sub_title]</a><br>";
						}				
				?>
            </div>
        </div>
        <div id="s_content">
        	<div id="s_c_subject">
            </div>
            <div id="s_c_content">
            	<div id="content">
                    <? // 컨텐츠 인클루드
						
						switch($_GET[property]){
							// 서브페이지
							case "sub" :
								$cquery = "select * from sub_menu where sub_id='$_GET[sub_id]'";
								$cresult = mysql_query($cquery, $connect);
								$cdata = mysql_fetch_assoc($cresult);
								echo $cdata[content];
							break;
							
							//갤러리
							case "gallery" :
								include "gallery.php";
							break;
							
							//게시판
							case "board";
								include "board.php";
							break;
							
							//로그인
							case "login";
								include "login.php";
							break;
							
							//회원가입
							case "join_member";
								include "join_member.php";
							break;
							
							//프로그램신청
							case "apply";
								include "apply.php";
							break;
							
							//CMS
							case "main_menu_list";
								include "../admin/main_menu_list.php";
							break;
							
							case "add_main_menu";
								include "../admin/add_main_menu.php";
							break;
							
							case "member_list";
								include "../admin/member_list.php";
							break;
							
							case "add_member";
								include "../admin/add_member.php";
							break;
							
							case "sub_menu_list";
								include "../admin/sub_menu_list.php";
							break;
							
							case "add_sub_menu";
								include "../admin/add_sub_menu.php";
							break;
						} ?>
            	</div>
            </div>
        </div>
    </div>
    <div id="copyright">
    </div>
</div>
</div>
</body>
</html>
