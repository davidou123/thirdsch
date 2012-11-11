<?php
$id=$_GET["id"];
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  student  where id='$id' ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
       $id=$rows["id"];
       $semester=$rows["semester"];
       $department=$rows["department"];
       $class=$rows["class"];
       $number=$rows["number"];	   
       $student=$rows["student"];	   
       $teacher	=$rows["teacher"];
       $company=$rows["company"];
       $time=$rows["time"];
       $memo=$rows["memo"];
	   
	}
	
  }

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

<h3>修改辦理情形</h3>
<form method="POST" action="admin_student_idf_save.php" style="padding-left:70px">
 <input name="id" type="hidden"  value="<?=$id?>"> 
<span class="pass">學年:</span><input type="text" name="semester" size="40" value="<?=$semester?>"><BR>
<span class="pass">科系:</span><input type="text" name="department" size="40" value="<?=$department?>"><BR>
<span class="pass">班級:</span><input type="text" name="class" size="40" value="<?=$class?>"><BR>
<span class="pass">學號:</span><input type="text" name="number" size="40" value="<?=$number?>"><BR>
<span class="pass">學生姓名:</span><input type="text" name="student" size="40" value="<?=$student?>"><BR>
<span class="pass">指導教師:</span><input type="text" name="teacher" size="40" value="<?=$teacher?>"><BR>
<span class="pass">實習公司:</span><input type="text" name="company" size="40" value="<?=$company?>"><BR>
<span class="pass">實習期間:</span><input type="text" name="time" size="40" value="<?=$time?>"><BR>
<span class="pass">備註:</span><input type="text" name="memo" size="40" value="<?=$memo?>">
	
	<BR>
	<input type="submit" value="送出" name="B3"></p>
</form>

</body>

</html>