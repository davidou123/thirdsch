<?
header("Content-type: text/html; charset=utf-8");
$filename=null;
$type=null;
$filename=$_GET['filename'];
$type=$_GET['type'];
$which=$_GET['which'];
	require_once("SQLconnection.php");  
	        // 建立SQL字串
	  $sql = "DELETE FROM form WHERE filename = '$filename' and type='$type' LIMIT 1";
	  // 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  echo"<BR>執行刪除完成<BR><BR><BR><BR></b>";
//刪除區----	

	  $filenameBIG5=iconv("utf-8","big5",$filename);
@unlink ("upload/$filenameBIG5");




?>
<html>
<head>
<meta http-equiv="refresh" content="0 ;URL=login.php?which=<?=$which?>" />
</head>
<body>

<a href="login.php?which=<?=$which?>">點我回到管理頁面</a>
</body>
</html>