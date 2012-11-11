<?
session_start();  // 啟動Session
 ob_start(); 
$error="";
 require_once("function.php");
 $webconter= counter(); //網站計數器
if (isset($_POST["usrname"]))
{

$usrname="";
$password="";
$usrname=$_POST["usrname"];
$password=$_POST["password"];
 require_once("SQLconnection.php");


// 建立MySQL資料庫連結
    $link = create_connection();
// 建立SQL指令字串
$sql = "SELECT * FROM employee WHERE password='".$password."' AND usrname='".$usrname."'";
$result = mysql_query($sql); // 執行SQL指令
// 是否有文章
if (mysql_num_rows($result) != 0)
{
//登入成功
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
        $_SESSION["login_session"] = true;   //把$_SESSION["login_session"]寫為真 用來判斷是否登入成功
  	  $_SESSION["usrname"]=$usrname;     //紀錄登入者是誰
	  $_SESSION["nickname"]=$rows["nickname"];

	    header("Location:login.php");  //跳轉到系統內
     }
}else{
$error="<b><font size='2' color='#FF0000'>OOPS您輸入錯誤溜</font></b>";//登入失敗
}
  mysql_free_result($result);
  }
  
  ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="僑光科技大學 跨校實習課程專區" />
<meta namge="description" content="僑光科技大學 跨校實習課程專區網站。" />
<meta name="author" content="davidou">

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
    .trclass{background: url(images/line.gif) repeat-x;background-position:bottom;} 
.footer{background-image : url(images/footer.png);background-repeat : repeat-x;font-size: 10pt; color:#808080;padding:5px 0px 0px 10px}
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
			
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="950" height="175">
          <param name="movie" value="banner.swf">
          <param name="quality" value="high">
          <embed src="banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="950" height="175"></embed></object>

			</td>
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

			<p><img border="0" src="images/news.png" width="705" height="25"></p>
			<img border="0" src="images/tmp.gif" width="198" height="185" style="float:left;">
			
			<table border="0" width="70%" cellspacing="0" cellpadding="0" style="float:left;border-top : 2px solid #C6E7BA;border-bottom : 2px solid #C6E7BA;margin-bottom:20px;">
<?php
 $per = 10; //每頁顯示項目數量 
$count_page= count_page($_GET["page"],10);   // (顯示第幾頁,每頁頁數)
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  news LIMIT $count_page[start],$per ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
echo "<tr class='trclass'>"
					."<td class='news_table'>"
					."<img border='0' src='images/ico_1.gif' width='19' height='11'><a href='news.php?id=".$rows["id"]."'>".$rows["title"]."</a></td>"
					."<td class='news_table'>".$rows["date"]."</td></tr>";


					}
	
  }
 
?>
			</table>
			
				<div style="width :700px;font-size: 11pt;color:#333333" ><p align="center">
			<?
			  //顯示頁數
			  $page="page: ";
   for($i=1;$i<=$count_page[pages];$i++) {
if(!$_GET["page"]){$_GET["page"]=1;$page="";}

   if($i==$_GET["page"]){$page.= "[ $i ]";}else{
    $page.= ' <a href="?page='.$i.'">' . $i . '</a> '; }
	
	if($count_page[pages]==1){$page="";}
} 
echo $page;
?></p></div>	　
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