<? 	//////////////////////////
	// ȸ������������
	//
	// ��¥ : 2011.02.16
	// ������ : �̹���
	/////////////////////////
?>
<img src="http://localhost/image/join.png" alt="�翵���ڱ� ȸ������" />
<form action="http://localhost/page/join_member_ok.php" method="post" enctype="multipart/form-data">
    <table class="join" cellpadding="1" cellspacing="0">
        <tr>
            <th><label for="uid">���̵�</label></th>
            <td><input type="text" class="b1" name="uid" size=16 /></td>
        </tr>
        <tr>
            <th><label for="upw">��й�ȣ</label></th>
            <td><input type="password" class="b1" name="upw" /></td>
        </tr>
        <tr>
            <th><label for="uname">�̸�</label></th>
            <td><input type="text" class="b1" name="uname" size=8 /></td>
        </tr>
        <tr>
            <th><label for="usex">����</label></th>
            <td><input type="radio" class="b0" name="usex" value="��" />��
           		<input type="radio" class="b0" name="usex" value="��" />��</td>
        </tr>
        <tr>
            <th><label for="uage">����</label></th>
            <td><input type="text" class="b1" name="uage" size=2 />��</td>
        </tr>
        <tr>
            <th><label for="uaddress">�ּ�</label></th>
            <td><input type="text" class="b1" name="uaddress" size=55 /></td>
        </tr>
        <tr>
            <th><label for="uemail">�̸���</label></th>
            <td><input type="text" class="b1" name="uemail" /></td>
        </tr>
        <tr>
            <th><label for="uprofile">������</label></th>
            <td><textarea class="b1" name="uprofile" cols="53" rows="10"></textarea></td>
        </tr>
        <tr>
            <th><label for="file">����</label></th>
            <td><input type="file" class="b1" name="file" size=41 /></td>
        </tr>
        <tr>
            <td class="tc h50" colspan="2"><input type="submit" class="bcw b1 fc" value="�����ϱ�" />
         								   <input type="reset" class="bcw b1 fc" value="�ٽþ���" /></td>
        </tr>
    </table>
</form>