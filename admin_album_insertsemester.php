<?php
session_start();  // 啟動Session
if ($_POST['type1'] != "" ) {
	require_once("SQLconnection.php");
	$link = create_connection();
	$type		=$_POST['type1'] ;
	$semester=$_POST['semester'] ;
	// 建立SQL指令字串
      $sql="INSERT INTO semester(type,semester)"." VALUES('".$type."','".$semester."')";
      mysql_query($sql) or die("SQL字串執行錯誤!<br>");
}

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跨校實習課程專區</title>
<SCRIPT LANGUAGE="javascript">
	alert("<?=$semester?>新增完成，將會為您跳回");
</SCRIPT>
<meta http-equiv="refresh"content="0 ;URL=login.php?which=admin_album"/>
</head>

<body>


</body>

</html>