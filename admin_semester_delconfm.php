<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function show_confirm()
{
var r=confirm("刪除提示: \r 你確定要刪除<?=$_GET["semester"]?>學年<?=$_GET["type"]?>的所有資料嗎? \r 刪除後資料就 救不回來 溜");
if (r==true)
  {
  location.href = 'admin_semester_delete.php?type=<?=$_GET["type"]?>&semester=<?=$_GET["semester"]?>&which=<?=$_GET["which"]?>&id=<?=$_GET['id']?>';
  }
else
  {
  alert("好加在 檔案沒有刪除");
  }
}
</script>
<meta http-equiv="refresh"content="0 ;URL=login.php?which=<?=$_GET["which"]?>"/>
</head>
<body onload="show_confirm()">
請稍候
<!-- <input type="button" onclick="show_confirm()" value="點我刪除檔案" /> --><BR><BR><BR>

</body>
</html>