<?
header("Content-type: text/html; charset=utf-8");
$id=null;
$which=null;
$id=$_GET['id'];
$which=$_GET['which'];
$picture=$_GET['picture'];
	require_once("SQLconnection.php");  
	        // 建立SQL字串
	  $sql = "DELETE FROM  album WHERE id = '$id'  LIMIT 1";
	  // 建立MySQL資料庫連結
    $link = create_connection();
      // 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  echo"<BR>執行刪除完成<BR><BR><BR><BR></b>";
//刪除區----	

	  $filenameBIG5=iconv("utf-8","big5",$picture);
@unlink ("upload/$filenameBIG5");
echo "刪除".$picture;
?>
<html>
<head>
<meta http-equiv="refresh" content="0 ;URL=login.php?which=admin_album" />
</head>
<body>

<a href="login.php?which=admin_album">5秒內將會自動跳回，或點我直接回到管理頁面</a>
</body>
</html>