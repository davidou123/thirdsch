<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function show_confirm()
{
var r=confirm("你確定要刪除<?=$_GET["filename"]?>嗎");
if (r==true)
  {
  location.href = 'admin_form_delete.php?which=<?=$_GET["which"]?>&type=<?=$_GET['type']?>&filename=<?=$_GET["filename"]?>';
  }
else
  {
  alert("好加在 檔案沒有刪除");
  }
}
</script>
<meta http-equiv="refresh" content="0 ;URL=login.php?which=<?=$_GET["which"]?>" />
</head>
<body onload="show_confirm()">
<?=$_GET["filename"]?>
<input type="button" onclick="show_confirm()" value="點我刪除檔案" /><BR><BR><BR>
<a href="login.php?which=<?=$_GET["which"]?>">點我回到管理頁面</a>
</body>
</html>