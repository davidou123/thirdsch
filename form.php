<?
session_start();  // 啟動Session
 require_once("function.php");
 $webconter= counter(); //網站計數器
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRansitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dTD">
<html>

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<title>跨校實習課程專區</title>
<style type="text/css">
input.input{
	width:100px;
	padding-left:5px;
	border-style: solid;
	border-width: 1px;
	border-color: #D2D2D2;
	color: #AAA;
}
.nav{margin-top:10px ;padding:5px 0px 0px 20px;float : left;position: relative; width:660px; height: 42px; background-image: url('images/menubg.png');font-weight: bold;}
.nav a{color:#FFFFFF; text-decoration: none;}
.nav a:hover{color:#FFFF00; position: relative; top: 1px; left: 1px;}

.news_table{padding:8px 0px 8px  0px;font-size: 10pt; color:#808080;}
input.input:focus{background-color:#fff;color: #000;}
.footer{background-image : url(images/footer.png);background-repeat : repeat-x;font-size: 10pt; color:#808080;padding:5px 0px 0px 10px}
    .trclass{background: url(images/line2.gif) repeat-x;background-position:bottom;} 
	.trclass:hover{background-color:#F8F8F8;}

.counter{margin-top :10px ;padding:20px 0px 20px 0px ; width: 228px; background-image: url('images/cpunterbg.png');text-align: center;color:#808080;font-size: 10pt;font-weight: bold;}
</style>

</head>

<body  style="background-image : url(images/bg.png);background-repeat : repeat-x;">

<div align="center">
	<table border="0" width="960" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="2">
			<div style="float : left;">			<img border="0" src="images/logo.png" width="280" height="63"></div>

<?require_once("model_nav.php");?>
			
			
			<img border="0" src="images/banner.jpg" width="960" height="175" alt="校外實習課程專區"></td>
		</tr>

		<tr>
			<td width="240" valign="top" bgcolor="#FFFFFF">
			<img border="0" src="images/login.jpg" width="237" height="26" alt="會員登入">
			
			<?require_once("model_login.php");?>
				<hr width="90%" size="1" color="#DEDEDE">
			
			<img border="0" src="images/LINK.png" width="237" height="26" alt="相關連結"><br>
			
			<div style="margin-top :10px ;padding-top:2px; width: 228px; background-image: url('images/linkbg.png')">
				<p align="center">
			
			<img  border="0" src="images/edugov.png" width="176" height="41" alt="教育部全球資源網">
			<img style="margin-top:7px"border="0" src="images/edugov2.png" width="175" height="41"alt="技職校院課程資源網">
			<img style="margin-top:7px" border="0" src="images/edugov3.png" width="175" height="41"alt="教育部技職司資訊傳播網">
			<img style="margin-top:7px"border="0" src="images/edugov4.png" width="176" height="41"alt="教育部產學做資訊網">
			<img style="margin-top:7px"border="0" src="images/edugov5.png" width="176" height="42"alt="教育部大專畢業生至職場就業資訊網"></p>
		
			　</div>
				<img border="0" src="images/counter.png" width="237" height="26" alt="流量統計"><br>
						<div class="counter" >
						累計人數: <?=$webconter[0]?><br>今日人數: <?=$webconter[1]?>
												</div>
						<Br>
		</td>
			<td width="83%" valign="top" bgcolor="#FFFFFF" style="TEXT-ALIGN: left;">

			<p><img border="0" src="images/form.png" width="705" height="25" alt="行政表單與流程"></p>
			流程<BR>
			<img border="0" src="images/PP2233.jpg" width="100" height="100" >

			<table border="0" width="70%" cellspacing="0" cellpadding="0" style="border-top : 2px solid #C6E7BA;border-bottom : 2px solid #C6E7BA;margin:-100px 0px 0px 130px ">

			<?php
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  form where type='流程'  ";
	$result = mysql_query($sql); // 執行SQL指令

	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
echo "<tr class='trclass'>"
					."<td class='news_table'>"
					."<img border='0' src='images/ico_1.gif' width='19' height='11'><a href='upload/".$rows["filename"]."'>".$rows["name"]."</a></td>"
					."<td class='news_table'>".$rows["date"]."</td></tr>";

					}
	
  }
?>

			</table><BR>
				<div style="width: 228px;margin-top:20px;float : none;">行政表單</div>
				
			<img border="0" src="images/PP2232.jpg" width="100" height="100" >

			<table border="0" width="70%" cellspacing="0" cellpadding="0" style="border-top : 2px solid #C6E7BA;border-bottom : 2px solid #C6E7BA;margin:-100px 0px 0px 130px ">
<?php
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  form where type='行政表單'  ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
echo "<tr class='trclass'>"
					."<td class='news_table'>"
					."<img border='0' src='images/ico_1.gif' width='19' height='11'><a href='upload/".$rows["filename"]."'>".$rows["name"]."</a></td>"
					."<td class='news_table'>".$rows["date"]."</td></tr>";


					}
	
  }
?>
			</table>		
			<br><br>
	　</td>
		</tr>
		<tr>
			<td colspan="2" class="footer"><p align="center">
			 僑光科技大學, 台灣 40721 台中市西屯區僑光路 100 號<br> &copy; 2010 Overseas Chinese University. All rights reserved. Powered by davidou</p>　</td>
		</tr>
	</table>
</div>

</body>

</html>