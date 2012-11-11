<style type="text/css">
	.related{
		width:90%;
		border:1px solid #DDD;
		border-top:1px solid #A3D1F0;
		overflow:hidden;
		margin-left:20px;
		margin-bottom:10px;}
	h3{
		margin: 0 auto;
		margin-bottom:10px;
		padding:5px 0px 5px 10px;
		font-size:13px;
		color: #1186ec;
		border-bottom:1px solid #DDD;
		background:#E0E0E0 url(images/sprite.png) no-repeat right -178px}
		.rltimg{	margin: 6px 0 0 0;
	background: url(images/icon_q_a_2.gif) no-repeat 9px 5px;
	padding-left: 28px;
padding-bottom: 10px;
	color: #666;
}
</style>
<p><img border="0" src="images/qa.png" width="705" height="25" alt="Q&A"></p>
<BR>

<div  class="buttomlink">
	<a href='admin_qa_insert.php?&keepThis=true&TB_iframe=true&height=630&width=700' class='thickbox'>新增QA問題</a></div>
	<BR><hr style="margin-left:20px"width="90%"><BR>
<?php
	require_once("SQLconnection.php");
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  qa  ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
echo "<div class='related'>"
	."<h3><img border='0' src='images/icon_q_a.gif' width='25' height='15'>".$rows["question"]."<span style='float:right;padding-right:20px;'><a href='admin_qa_idf.php?id=".$rows["id"]."'>編輯</a> | <a href='admin_qa_delconfm.php?which=admin_news&id=".$rows["id"]."'>刪除</a></span></h3>"
		."<ul class='rltimg'>".$rows["answer"]."		</ul></div>";


					}
	
  }
?>






