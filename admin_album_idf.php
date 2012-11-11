<?php
$id=$_GET["id"];
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  album  where id='$id' ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
       $id=$rows["id"];
       $semester=$rows["semester"];
       $picture=$rows["picture"];
       $memo=$rows["memo"];
	}
	
  }

?>



<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跨校實習課程專區</title>
<!-- TinyMCE -->
<script type="text/javascript" src="js/tinymcec/jscripts/tiny_mce.js"></script>
<script type="text/javascript" src="js/tinymcec/tinymac.js"></script>
<!-- /TinyMCE -->
</head>

<body>

<h3>修改最新消息</h3>
<img border='0' src='upload/<?=$picture?>' width='164' >
<form method="POST" action="admin_album_idf_save.php">
 <input name="id" type="hidden"  value="<?=$id?>"> 
學年:<input type="text" name="semester" size="40" value="<?=$semester?>">
	<p><textarea rows="20" name="memo" cols="50"><?=$memo?></textarea>
	
	<BR>
	<input type="submit" value="送出" name="B3"></p>
</form>

</body>

</html>