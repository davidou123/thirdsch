			<p><img border="0" src="images/laws.png" width="705" height="25" alt="各項法規"></p>
			<BR>
			<div  class="buttomlink">
	<a href='admin_law_upload.php?&keepThis=true&TB_iframe=true&height=330&width=700' class='thickbox'>上傳法規檔案</a></div>
			<BR>
			<img border="0" src="images/law.gif" width="100" height="100" >

			<table border="0" width="70%" cellspacing="0" cellpadding="0" style="border-top : 2px solid #C6E7BA;border-bottom : 2px solid #C6E7BA;margin:-100px 0px 0px 130px ">
			
			<?php
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  form where type='法規'  ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
echo "<tr class='trclass'>"
					."<td class='news_table'>"
					."<img border='0' src='images/ico_1.gif' width='19' height='11'><a href='upload/".$rows["filename"]."'>".$rows["name"]."</a></td>"
					."<td class='news_table'>".$rows["date"]."</td>"
					."<td class='news_table'> <a href='admin_form_delconfm.php?type=法規&which=admin_law&filename=".$rows["filename"]."'>刪除</a></td></tr>";
					}
	
  }
?>

			</table><BR>

	