	<?php
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  semester where  type='student' ORDER BY semester DESC";
	$result = mysql_query($sql); // 執行SQL指令
	$nowsem="";   //目前學年選項已有
	$lastslect="";	//畫面上要顯示的學年
	$downoption="";
	  if($_POST['slectsem'] ){$lastslect=$_POST['slectsem'] ; }//請選擇要查詢的學年
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
	$nowsem.= "<div class='semdel' style='float : left;'><a href='admin_semester_delconfm.php?type=student&semester=".$rows["semester"]."&which=admin_student' >".$rows["semester"]."</a></div>";
	
	if($lastslect==""){$lastslect=$rows["semester"];
	$downoption.="<option selected>".$rows["semester"]."</option>";}  //如果沒有查詢 以最後一筆當作顯示內容
	else if ($lastslect==$rows["semester"]){$downoption.="<option selected>".$rows["semester"]."</option>";}
else{$downoption.="<option>".$rows["semester"]."</option>";}
	}
	
  }else{echo"尚未新增學年";}
  

?>
<style type="text/css"> 
  .list tr:hover {background: url(images/tablebg2.png) repeat;} 
  .list .top{background: url(images/line1.gif) repeat-x;background-position:bottom;height:50px;font-weight: bold;text-align: center;}
  .trclass{background: url(images/line1.gif) repeat-x;background-position:bottom;height:50px;font-size: 9pt; } 
  .conerup{background: url(images/conerleft.gif) no-repeat;}
  .conerright{background: url(images/conerright.gif) no-repeat; background-position : right top;}
  </style> 
			<p><img border="0" src="images/student.png" width="705" height="25" alt="辦理情形"></p>
			<BR>
			
			<form method="POST" action="admin_student_insertsemester.php">
	<div style="float : left;padding:5px;"><p>新增學年選項 
			<input type="text" name="semester" size="20" value="請輸入數字"onfocus="if (this.value == '請輸入數字') {this.value = '';}" onblur="if (this.value == '') {this.value = '請輸入數字';}" style="color:#808080">
			<input type="hidden" name="type1" value="student" >
			<input type="submit" value=" 送 出 " name="B1">	</div></form>
	
	<div style="margin-left:10px;padding:5px;background-color:#DDF4FF;float : left;"><span  style='float : left;'>目前學年選項已有: </span>
	<?=$nowsem;?>
</div></p>


<BR><BR><BR><bR>
<form method="POST" action="login.php?which=admin_student">

	<p>請選擇要查詢的學年 <select size="1" name="slectsem">
<?=$downoption?>
	</select> <input type="submit" value=" 送 出 " name="B3"></p>
</form>
<BR>
<div  class="buttomlink" style="float:right;margin:0 40px 10px 0">
	<a href='admin_student_insert.php?semester=<?=$lastslect?>&keepThis=true&TB_iframe=true&height=400&width=500' class='thickbox'>新增<?=$lastslect?>學年資料</a></div>
	
 
<table border="0" width="100%" class="list"cellspacing="0" cellpadding="0" background="images/tablebg.png">
	<tr class="top">
		<td class="conerup">科系</td>
		<td>班級</td>
		<td>學號</td>
		<td>學生姓名</td>
		<td>指導教師</td>
		<td>實習公司</td>
		<td>實習期間</td>
		<td>備註</td>
		<td class="conerright">選項</td>
	</tr>

	<?php
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM   student  where semester='$lastslect' ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {

	//;
	echo"<tr class='trclass'>"
		."<td class='imgbord'>".$rows["department"]."</td>" //系科
		."<td>".$rows["class"]."</td>"		//班級
		."<td>".$rows["number"]."</td>"	//學號
		."<td>".$rows["student"]."</td>"	//學生姓名
		."<td>".$rows["teacher"]."</td>"	//指導教師
		."<td>".$rows["company"]."</td>"	//實習公司
		."<td>".$rows["time"]."</td>"			//實習期間
		."<td>".$rows["memo"]."</td>"		//備註
		."<td><a  href='admin_student_idf.php?id=".$rows["id"]." &keepThis=true&TB_iframe=true&height=400&width=500' class='thickbox'>編輯</a> <a href='admin_student_delconfm.php?which=admin_student&id=".$rows["id"]."'>刪除</a></td>"
	."</tr>";
					}
	
  }
?>
</table>
