<?
///////////////////////
// 메인페이지
// 작성자 : 이민정
// 날짜 : 2011.02.16
///////////////////////


include "include/lib.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />

<title>▒양영도자기 입니다▒</title>
<link href="http://localhost/css/common.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
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
                        while($m_data = mysql_fetch_array($m_result)){
                            $s_query = "select * from sub_menu where main_id='$m_data[main_id]' order by od asc";
                            $s_result = mysql_query($s_query, $connect);
                            $s_data = mysql_fetch_array($s_result);
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
    <div id="flash">
   	  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1000','height','390','src','flash/main','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/main' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1000" height="390">
          <param name="movie" value="flash/main.swf" />
          <param name="quality" value="high" />
  	  </object></noscript>
    </div>
    <div id="latest">
   	  <div id="banner">
      	<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','300','height','170','src','flash/banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/banner' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="300" height="170">
          <param name="movie" value="flash/banner.swf" />
          <param name="quality" value="high" />
   	    </object></noscript>
      </div>
      <div id="right">
        	<div id="login">
            </div>
            <div id="b_g">
           	  <div id="notice">
              	<div id="n_subject">
                </div>
                <div id="n_notice">
                </div>
              </div>
              <div id="gallery">
                <div id="g_subject">
                </div>
                <div id="g_gallery">
                </div>
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
