<?
header("Content-type: text/html; charset=utf-8");

$semester	=$_GET['semester']; //要刪除哪格學期的資料
$type			=$_GET['type'];  //album 或student

	require_once("SQLconnection.php");  
	        // 建立SQL字串   刪除學年
	  $sql = "DELETE FROM semester WHERE semester = '$semester' and type='$type' LIMIT 1";
	  // 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  
	        // 建立SQL字串   刪除該學年的表格資料
	  $sql = "DELETE FROM $type WHERE semester = '$semester' ";
	  // 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  echo"<BR>執行刪除完成，請按右上角關閉 或esc離開畫面<BR><BR><BR><BR></b>";
//刪除區----	


?>
<html>
<head>
<meta http-equiv="refresh"content="0 ;URL=login.php?which=<?=$_GET["which"]?>"/>
</head>
<body>

</body>
</html>
