<? 	//////////////////////////
	// 회원가입페이지
	//
	// 날짜 : 2011.02.16
	// 만든이 : 이민정
	/////////////////////////
?>
<img src="http://localhost/image/join.png" alt="양영도자기 회원가입" />
<form action="http://localhost/page/join_member_ok.php" method="post" enctype="multipart/form-data">
    <table class="join" cellpadding="1" cellspacing="0">
        <tr>
            <th><label for="uid">아이디</label></th>
            <td><input type="text" class="b1" name="uid" size=16 /></td>
        </tr>
        <tr>
            <th><label for="upw">비밀번호</label></th>
            <td><input type="password" class="b1" name="upw" /></td>
        </tr>
        <tr>
            <th><label for="uname">이름</label></th>
            <td><input type="text" class="b1" name="uname" size=8 /></td>
        </tr>
        <tr>
            <th><label for="usex">성별</label></th>
            <td><input type="radio" class="b0" name="usex" value="남" />남
           		<input type="radio" class="b0" name="usex" value="여" />여</td>
        </tr>
        <tr>
            <th><label for="uage">나이</label></th>
            <td><input type="text" class="b1" name="uage" size=2 />세</td>
        </tr>
        <tr>
            <th><label for="uaddress">주소</label></th>
            <td><input type="text" class="b1" name="uaddress" size=55 /></td>
        </tr>
        <tr>
            <th><label for="uemail">이메일</label></th>
            <td><input type="text" class="b1" name="uemail" /></td>
        </tr>
        <tr>
            <th><label for="uprofile">프로필</label></th>
            <td><textarea class="b1" name="uprofile" cols="53" rows="10"></textarea></td>
        </tr>
        <tr>
            <th><label for="file">사진</label></th>
            <td><input type="file" class="b1" name="file" size=41 /></td>
        </tr>
        <tr>
            <td class="tc h50" colspan="2"><input type="submit" class="bcw b1 fc" value="가입하기" />
         								   <input type="reset" class="bcw b1 fc" value="다시쓰기" /></td>
        </tr>
    </table>
</form>