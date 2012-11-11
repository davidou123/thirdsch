<?php
require_once("SQLconnection.php");
	$id			= htmlspecialchars($_POST["id"]); 
	$semester			= htmlspecialchars($_POST["semester"]);
	$department	= htmlspecialchars($_POST["department"]);
	$class	= htmlspecialchars($_POST["class"]);
	$number	= htmlspecialchars($_POST["number"]);
	$student	= htmlspecialchars($_POST["student"]);
	$teacher	= htmlspecialchars($_POST["teacher"]);
	$company	= htmlspecialchars($_POST["company"]);
	$time	= htmlspecialchars($_POST["time"]);
	$memo	= htmlspecialchars($_POST["memo"]);

	$sql = "UPDATE student SET semester='".$semester."',department='".$department."',class='".$class."',number='".$number."' ,student='".$student."' ,teacher='".$teacher."',company='".$company."',time='".$time."',memo='".$memo."' where id='".$id."'";
	  // 建立MySQL資料庫連結
    $link = create_connection();
	// 執行SQL指令
      mysql_query($sql);
      mysql_close($link);
	  
	  
	  ?>
更新成功!
請按右上角關閉 或esc  離開畫面
	   