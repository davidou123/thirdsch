<?php
session_start();  // 啟動Session
$id=$_GET["id"];
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  qa  where id='$id' ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
       $id=$rows["id"];
       $question=$rows["question"];
       $answer=$rows["answer"];
       $date=$rows["date"];
	}
	
  }

?>
<html>

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/thickbox.js"></script> 
<link rel="stylesheet" href="thickbox.css" type="text/css" media="screen" /> 

<title>跨校實習課程專區</title>
<style type="text/css">
input.input{
	width:110px;
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
	.related{
		width:90%;
		border:1px solid #DDD;
		border-top:1px solid #A3D1F0;
		overflow:hidden;
		margin-left:20px;
		margin-bottom:10px;}
	h3{
		margin: 0 auto;
		margin-bottom:10px;
		padding:5px 0px 5px 10px;
		font-size:13px;
		color: #1186ec;
		border-bottom:1px solid #DDD;
		background:#E0E0E0 url(images/sprite.png) no-repeat right -178px}
		.rltimg{	margin: 6px 0 0 0;
	background: url(images/icon_q_a_2.gif) no-repeat 9px 5px;
	padding-left: 28px;
padding-bottom: 10px;
	color: #666;
}
.leftlink{background-image : url(images/icon.png) ;background-repeat : no-repeat;padding-left:35px;padding-bottom:5px;margin:12px 2px 0px 2px ;}
.leftlink a{text-decoration: none;}
.leftlink a:hover{position: relative; top: 1px; left: 1px;}
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
			
			<img border="0" src="images/management.png" width="228" height="26" alt="管理頁面選項"><br>
			
		<div style="margin-top :10px ;padding-top:2px; width: 228px; background-image: url('images/linkbg.png')">
				<p align="center">
			<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_news'>管理最新消息</a></div>
			<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_law'>管理各項法規</a></div>
			<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_student'>管理辦理情形</a></div>
			<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_form'>管理行政表單</a></div>
			<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_album'>管理活動花絮</a></div>
			<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_qa'>管理Q&A </a></div>
						<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_qa'>管理相關連結 </a></div>
						<div  class="leftlink"onmouseover= 'this.style.backgroundColor= "#EEEEEE " ' onmouseout= 'this.style.backgroundColor= "#fff " ' ><a href='login.php?which=admin_password'>變更密碼 </a></div>
			</p>
			　</div>

						<Br>
		</td>
			<td width="83%" valign="top" bgcolor="#FFFFFF">

			<p><img border="0" src="images/news.png" width="705" height="25"></p>
		
		
修改QA
<form method="POST" action="admin_qa_idf_save.php">
 <input name="id" type="hidden"  value="<?=$id?>"> 


	
<div class='related'>
	<h3><img border='0' src='images/icon_q_a.gif' width='25' height='15'><input type="text" name="question" size="40" value="<?=$question?>"></h3>
		<ul class='rltimg'><textarea rows="20" name="answer" cols="70%"><?=$answer?></textarea>	
		<br><input type="submit" value="送出" name="B3">
		</ul></div>
			</form>
			<br><br><br><br><br><br><br><br><br><br><br>
		　<p>　</p>
			<p>　</td>
		</tr>
		<tr>
			<td colspan="2" class="footer"><p align="center">
			 僑光科技大學, 台灣 40721 台中市西屯區僑光路 100 號<br> &copy; 2010 Overseas Chinese University. All rights reserved. Powered by davidou</p>　</td>
		</tr>
	</table>
</div>

</body>

</html>