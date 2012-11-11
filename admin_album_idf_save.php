<?php
require_once("SQLconnection.php");
	$semester	= htmlspecialchars($_POST["semester"]);
	$memo		= $_POST["memo"];
	$id				= htmlspecialchars($_POST["id"]);

	$sql = "UPDATE album SET semester='".$semester."',memo='".$memo."' where id='".$id."'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	// 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  
	/*  echo $sql;*/
	  ?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
更新成功!
請按右上角關閉 或esc  離開畫面，或按旁邊灰色區域跳回

</body>

</html>