<?
require_once("SQLconnection.php");

		
function count_page($page,$per)
{
		$link = create_connection();
		$sql = "select count(*) from news";  
		$result = mysql_query($sql); // 執行SQL指令
		$data1 = mysql_fetch_row($result); 

		$pages = ceil($data1[0]/$per); //總頁數
 
  if(!isset($page)){ 
    $page=1; //設定起始頁 
} else { 
    $page = intval($_GET["page"]); //確認頁數只能夠是數值資料 
    $page = ($page > 0) ? $page : 1; //確認頁數大於零 
    $page = ($pages > $page) ? $page : $pages; //確認使用者沒有輸入太神奇的數字 
}
  
  $start = ($page-1)*$per; //每頁起始資料序號
  $count_page[start]=$start;//每頁起始資料序號
  $count_page[pages]=$pages;//總頁數
return $count_page;
 } 
 
 
 
$per = 10; //每頁顯示項目數量 
$count_page= count_page($_GET["page"],10);   // (顯示第幾頁,每頁頁數)


     $link = create_connection();
	$sql = "select * from news LIMIT $count_page[start],$per";  
	$result = mysql_query($sql); // 執行SQL指令

if (mysql_num_rows($result) != 0) {
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	echo $rows["id"]."<BR>"; //$chname[pic] $chname[name]...
	 }
}
  mysql_free_result($result); 
  

  //顯示頁數
   for($i=1;$i<=$count_page[pages];$i++) {
if(!$_GET["page"]){$_GET["page"]=1;}

   if($i==$_GET["page"]){echo "[ $i ]";}else{
    echo '<a href="?page='.$i.'">' . $i . '</a> '; }
} 
  ?>