<?php
session_start();  // 啟動Session
if ($_POST['student'] != "" ) {
echo "新增完成";
	require_once("SQLconnection.php");
	$link = create_connection();
	$semester	= htmlspecialchars($_POST["semester"]);
	$department	= htmlspecialchars($_POST["department"]);
	$class			= htmlspecialchars($_POST["class"]);
	$number		= htmlspecialchars($_POST["number"]);
	$student		= htmlspecialchars($_POST["student"]);
	$teacher		= htmlspecialchars($_POST["teacher"]);
	$company	= htmlspecialchars($_POST["company"]);
	$time			= htmlspecialchars($_POST["time"]);
	$memo		= htmlspecialchars($_POST["memo"]);
	// 建立SQL指令字串
      $sql="INSERT INTO student(semester,department,class,number,student,teacher,company,time,memo)".
           " VALUES('".$semester."','".$department."','".$class."','".$number."','".$student."','".$teacher."','".$company."','".$time."','".$memo."')";
      mysql_query($sql) or die("SQL字串執行錯誤!<br>");
}


	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  semester where  type='student' ORDER BY semester DESC";
	$result = mysql_query($sql); // 執行SQL指令
	$lastslect=$_GET["semester"];	//畫面上要顯示的學年
	$downoption="";
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
	if($lastslect==$rows["semester"]){
	$downoption.="<option selected>".$rows["semester"]."</option>";}  //如果沒有查詢 以最後一筆當作顯示內容
else{$downoption.="<option>".$rows["semester"]."</option>";}
	}
	
  }else{echo"尚未新增學年";}
  

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跨校實習課程專區</title>
<style type="text/css"> 
body{line-height: 200%;}
.pass{display:inline-block;width:80px;font-weight: bold;}
  </style> 
</head>

<body>

<h3>新增學年資料</h3>
<form method="POST" action="admin_student_insert.php" style="padding-left:70px">

<span class="pass">學年:</span><select size="1" name="semester"><?=$downoption?>	</select><BR>
<span class="pass">科系:</span><input type="text" name="department" size="40" ><BR>
<span class="pass">班級:</span><input type="text" name="class" size="40" ><BR>
<span class="pass">學號:</span><input type="text" name="number" size="40" ><BR>
<span class="pass">學生姓名:</span><input type="text" name="student" size="40" ><BR>
<span class="pass">指導教師:</span><input type="text" name="teacher" size="40"><BR>
<span class="pass">實習公司:</span><input type="text" name="company" size="40" ><BR>
<span class="pass">實習期間:</span><input type="text" name="time" size="40"><BR>
<span class="pass">備註:</span><input type="text" name="memo" size="40" >
	
	<BR>
	<input type="submit" value="送出" name="B3"></p>
</form>

</body>

</html>
