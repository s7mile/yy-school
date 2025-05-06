<? 	//////////////////////////
	// 로그인페이지
	//
	// 날짜 : 2011.02.18
	// 만든이 : 이민정
	/////////////////////////
?>
<div id="login">
    <form action="http://localhost/page/login_ok.php" method="post">
        <table class="logint" cellpadding="1" cellspacing="0">
            <tr>
                <th><label for="id">아이디</label></th>
                <td><input class="tinput" type="text" name="id" /></td>
            </tr>
            <tr>
                <th><label for="pw">비밀번호</label></th>
                <td><input class="tinput" type="password" name="pw" /></td>
            </tr>
            <tr>
                <td colspan="2" class="tr"><input type="image" src="http://localhost/image/loginbtn.png" /></td>
            </tr>
            <tr>
                <td class="h50 tr fs9" colspan="2">아직 회원이 아니세요?&nbsp;&nbsp;<a href="http://localhost/page/sub.php/join_member" title="회원가입하기"><strong>회원가입하기</strong></a></td>
            </tr>
        </table>
    </form>
</div>