<?php

//檔案上傳
if ($_FILES["uploadedfile"]["size"]!=0) {

$filename_original=$_FILES['uploadedfile']['name'];
$filename2=rand(100, 999).$filename_original;
$filenameBIG5=iconv("utf-8","big5",$filename2); //因為檔名只能big5 所以要轉碼才能當檔名

$subn_array=array("png","jpg","jpeg","gif","bmp");  //允許的附檔
	$fn_array=explode(".",$_FILES['uploadedfile']['name']);//分割檔名
	$mainName = $fn_array[0];//檔名
	$subName = $fn_array[1];//副檔名
	
	
	
		foreach($subn_array as $index => $value){
		if($subName == $value){
	
move_uploaded_file($_FILES["uploadedfile"]['tmp_name'], "upload/$filenameBIG5");
    echo $_FILES['uploadedfile']['name']." <font face='arial' size='2'><BR>檔案上傳成功 ! 檔案型態：$uploadedfile_type ";
    echo "檔案大小：";
    printf("%.2f",$uploadedfile_size/1024);
    echo "  KB <BR> <font color='#0000FF'><b>回到頁面後請重新整理才會顯示</b></font>";
	//print_r($_FILES['uploadedfile']); //可以知道這個陣列有哪些可用的資訊
/*要破除檔案大小限制 設定php.ini的 post_max_size 與 upload_max_filesize*/		


	require_once("SQLconnection.php");
	$link = create_connection();
	$semester=$_POST["semester"];  
	$memo=$_POST["memo"];  

	// 建立SQL指令字串
      $sql="INSERT INTO album(semester,picture,memo)".
           " VALUES('".$semester."','".$filename2."','".$memo."')";
      mysql_query($sql) or die("SQL字串執行錯誤!<br>");
	  $checkSubName ="";
			break;
		}else{
			$checkSubName ="<font color='#FF0000'>檔案格式不符，可支援的檔案為png,jpg,bmp,gif</font>";
		
		}
	}


	}
 
$_FILES=null;
$filename2=null;
?>


<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>上傳範例</title>

</head>

<body>

<div align="center">
	<table border="0" width="70%" >
		<tr><td>
<p align="center"><b><font size="5">各項法規 檔案上傳</font></b></p>
	<table border="0" width="95%" cellspacing="0" cellpadding="0" id="table1" bgcolor="#F1F7F7">
		<tr><td><b>檔案上傳<br></b></td>		</tr>
		<tr><td style="padding-left: 10px">
			<font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
請選擇你要上傳到 各項法規 之後選擇檔案即可</font></b></td>
		</tr>
	</table>
	<BR>
	<?=$checkSubName?>
	<form method="post" enctype="multipart/form-data" action ="admin_album_upload.php">
<input type = "hidden" name = "semester" value="<?=$_GET["semester"]?>">
你現在新增的是<?=$_GET["semester"]?>學年照片
<HR>

<input type = "file" name="uploadedfile" size="50">
<input type = "hidden" name = "max_file_size" value="188743680">
<BR>
輸入註解<BR><textarea rows="10" name="memo" cols="40"></textarea>
<BR><BR><BR>
<input type="submit" value="送出" name="submit">
</form>

</td>
		</tr>
	</table>
</div>


</body>

</html>
