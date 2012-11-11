<?php
session_start();  // 啟動Session
 ob_start(); 

if ($_SESSION["login_session"] != true)
   header("Location:index.php");
  if($_GET['which']){
  $which =$_GET['which'];}else{$which="admin_news";}
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.nav{margin-top:10px ;padding:5px 0px 0px 20px;float : left;position: relative; width:660px; height: 42px;
		background-image: url('images/menubg.png');font-weight: bold;}
.nav a{color:#FFFFFF; text-decoration: none;}
.nav a:hover{color:#FFFF00; position: relative; top: 1px; left: 1px;}

.news_table{padding:8px 0px 8px  0px;font-size: 10pt; color:#808080;}
input.input:focus{background-color:#fff;color: #000;}
.trclass{background: url(images/line.gif) repeat-x;background-position:bottom;} 
.footer{background-image : url(images/footer.png);background-repeat : repeat-x;font-size: 10pt; color:#808080;padding:5px 0px 0px 10px}
.counter	{margin-top :10px ;padding:20px 0px 20px 0px ; width: 228px; background-image: url('images/cpunterbg.png');
				text-align: center;color:#808080;font-size: 10pt;font-weight: bold;}
.buttomlink{width: 97px; height: 25px;  background-image: url('images/buttom.png');padding:12px 0 0 33px;font-size: 10pt;margin-left:120px}
.buttomlink a{text-decoration: none;color:#333333;}
.buttomlink a:hover{color:#000; position: relative; top: 1px; left: 1px;}
.leftlink{background-image : url(images/icon.png) ;background-repeat : no-repeat;padding-left:35px;padding-bottom:5px;margin:12px 2px 0px 2px ;}
.leftlink a{text-decoration: none;}
.leftlink a:hover{position: relative; top: 1px; left: 1px;}
.semdel a{background-image : url(images/tick.png) ; background-repeat: no-repeat;padding-left:15px;margin-right:5px} /*目前學年選項*/
.semdel a:hover{background-image : url(images/deteico.png) ; background-repeat: no-repeat;} /*目前學年選項*/
.pass{display:inline-block;width:150px;}
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
			<td width="240" valign="top" bgcolor="#FFFFFF" style="TEXT-ALIGN: left;">
			<img border="0" src="images/login.jpg" width="237" height="26" alt="會員登入">
			
<?require_once("model_login.php");?><BR>


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
			<td width="83%" valign="top" bgcolor="#FFFFFF" style="TEXT-ALIGN: left;">


		
		
 <?require_once($which.".php");?>
			
			<br><br><br><br>
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