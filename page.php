<?
require_once("SQLconnection.php");

		
function count_page($page,$per)
{
		$link = create_connection();
		$sql = "select count(*) from news";  
		$result = mysql_query($sql); // ����SQL���O
		$data1 = mysql_fetch_row($result); 

		$pages = ceil($data1[0]/$per); //�`����
 
  if(!isset($page)){ 
    $page=1; //�]�w�_�l�� 
} else { 
    $page = intval($_GET["page"]); //�T�{���ƥu����O�ƭȸ�� 
    $page = ($page > 0) ? $page : 1; //�T�{���Ƥj��s 
    $page = ($pages > $page) ? $page : $pages; //�T�{�ϥΪ̨S����J�ӯ��_���Ʀr 
}
  
  $start = ($page-1)*$per; //�C���_�l��ƧǸ�
  $count_page[start]=$start;//�C���_�l��ƧǸ�
  $count_page[pages]=$pages;//�`����
return $count_page;
 } 
 
 
 
$per = 10; //�C����ܶ��ؼƶq 
$count_page= count_page($_GET["page"],10);   // (��ܲĴX��,�C������)


     $link = create_connection();
	$sql = "select * from news LIMIT $count_page[start],$per";  
	$result = mysql_query($sql); // ����SQL���O

if (mysql_num_rows($result) != 0) {
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) {
	echo $rows["id"]."<BR>"; //$chname[pic] $chname[name]...
	 }
}
  mysql_free_result($result); 
  

  //��ܭ���
   for($i=1;$i<=$count_page[pages];$i++) {
if(!$_GET["page"]){$_GET["page"]=1;}

   if($i==$_GET["page"]){echo "[ $i ]";}else{
    echo '<a href="?page='.$i.'">' . $i . '</a> '; }
} 
  ?>