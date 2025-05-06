<div id="gal">
<table class="galt" cellpadding="1" cellspacing="0">
	<tr>
    	<th>사진</th>
        <th>제목</th>
        <th>작성자</th>
        <th>날짜</th>
        <th>추천수</th>
    </tr>
<? 
	$gquery = "select * from gallery where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'";
	$gresult = mysql_query($gquery, $connect);
		while($gdata = mysql_fetch_assoc($gresult)){
		
		if(!$gdata[no]){?>
	<tr> 
		<td colspan="5"><? echo "게시물이 없습니다";?></td>
    </tr>
    <? } ?>
	<tr>
    	<td class="w120 tc"><a href="http://localhost/page/sub.php/gallery/<?= $gdata[main_id]?>/<?= $gdata[sub_id]?>/<?= $gdata[no]?>"><img src="http://localhost/data/gallery_file/<?= $gdata[file_name]?>" alt="게시물보기" width="100px" /></a></td>
        <td><?= $gdata[subject]?></td>
        <td class="tc"><?= $gdata[writer]?></td>
        <td class="tc"><?= $gdata[date]?></td>
        <td class="tc"><?= $gdata[good]?></td>
    </tr>
<? } ?>
</table>
</div>