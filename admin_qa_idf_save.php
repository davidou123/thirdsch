<?php
require_once("SQLconnection.php");
	$question			= htmlspecialchars($_POST["question"]);
	$answer	= htmlspecialchars($_POST["answer"]);
	$id			= htmlspecialchars($_POST["id"]); 

	$sql = "UPDATE qa SET question='".$question."',answer='".$answer."' where id='".$id."'";
	echo $sql;
	  // 建立MySQL資料庫連結
    $link = create_connection();
	// 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  
	  
	  ?>

<html>
<head>
<meta http-equiv="refresh" content="0 ;URL=login.php?which=admin_qa" />
</head>
<body>
更新成功!
<a href="login.php?which=admin_qa">點我跳回畫面</a>
</body>
</html>
