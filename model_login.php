			<div style="position: relative; width: 228px; height: 85px; background-image : url('images/loginbg.png');padding-left:5px; padding-top:15px; margin-top: 5px;TEXT-ALIGN: left;" >
			<? if($_SESSION["login_session"] != true){?>
			<form method="POST" action="index.php" name="qoo">
			<a style="cursor: pointer;" onClick="qoo.submit();">
			<img border="0" src="images/login.gif" width="49" height="43" style="float : right;margin:10px 10px 0 0px" alt="login">	</a>
				<font color="#999999" style="line-height: 200%;">帳號 ：</font><input type="text" name="usrname" size="14" value="請輸入帳號" class="input"	onfocus="if (this.value == '請輸入帳號') {this.value = '';}" onblur="if (this.value == '') {this.value = '請輸入帳號';}"  /><br>
				<font color="#999999" style="line-height: 200%;">密碼 ：</font><input type="password" name="password" size="14"class="input">
				
				<?=$error?>
				<input type="submit" value="送出"  style="visibility: hidden;">
				</form>
				<?}else{?>
				<font color="#999999">歡迎</font><b><?=$_SESSION["nickname"];?></b>登入系統
				<BR><BR>
				<p align="center">
								<a style="cursor: pointer;" onClick="location.href = 'login.php'">
				<img border="0" src="images/login2.gif" width="65" height="25"  alt="回到系統"></a>
								<a style="cursor: pointer;" onClick="location.href = 'loginout.php'">
				<img border="0" src="images/login3.gif" width="65" height="25"  alt="登出"></a></p><?}?>
				</div>