<?php
session_start();

if($_POST['flag'] == "logout"){ //ログアウトボタンが押された．
	$_SESSION = array(); //初期化
	session_destroy(); //セッションを破棄
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="3; URL=loginform.html" />
logouting...