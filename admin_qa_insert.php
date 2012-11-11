<?php
session_start();  // 啟動Session
if ($_POST['question'] != "" ) {
echo "新增完成<BR>";
	require_once("SQLconnection.php");
	$link = create_connection();
		$date		=date("Y-m-d");
			$content_person=$_SESSION["usrname"];
	// 建立SQL指令字串
      $sql="INSERT INTO qa(question,answer)"." VALUES('".$question."','".$answer."')";
      mysql_query($sql) or die("SQL字串執行錯誤!<br>");

}

?>



<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>跨校實習課程專區</title>
</head>

<body>

<h3>新增QA問答</h3>
<form method="POST" action="admin_qa_insert.php">

標題:<input type="text" name="question" size="40" value="">
	<p><textarea rows="20" name="answer" cols="50"></textarea>
	
	<BR>
	<input type="submit" value="送出" name="B3"></p>
</form>

</body>

</html>