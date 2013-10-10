<?php
	session_start();
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if(empty($_SESSION['login'])){ //まだログインしていない
		if(!empty($_POST['password'])){//値が入力されている
			$password = "hoge"; //パスワード
			$input_pass = $_POST['password']; //入力された値
			if($password == $input_pass){
				echo "ログイン成功";
				$_SESSION['login'] = "ログイン中";
			}else{//パスワード入力に失敗するとログイン前のページにリダイレクト	
				echo "ログイン失敗";
				echo "アクセスするにはログインが必要です．5秒後にログインページに飛びます。";
				echo '<META HTTP-EQUIV="Refresh" CONTENT="5; URL=loginform.html" />';
			}
		}else{//値が入力されていない
			echo "パスワードを入力してください";
		}
	}else{//ログイン状態
		echo "すでにログイン済です";

		echo '<form action="logout.php" method="post">
				<input type="hidden" name="flag" value="logout" />
				<input type="submit" value="ログアウト" />
			</form>';
	}
		// //ログインしてるかの判定
		// if(empty($_SESSION['loginss'])){ //ログインしていない
		// 	$password = "hoge"; //パスワード
		// 	$input_pass = $_POST['password']; //入力された値
			
		// 	if(!empty($input_pass)){ //パスワードが入力されている
		// 		if($input_pass === $password){ //パスワードが一致
		// 			echo "ログイン成功♡"; //ログイン成功
		// 			$_SESSION['loginss'] = "ログイン中"; //ログイン状態をセッションに保存
		// 		}else{
		// 			echo "パスワードが間違っています...orz"; //ログイン失敗
		// 		}
		// 	}else{//パスワードが入力されていない	
		// 		echo "パスワードを入力して下さい。<br />";
		// 		echo "アクセスするにはログインが必要です．5秒後にログインページに飛びます。";
		// 		echo '<META HTTP-EQUIV="Refresh" CONTENT="5; URL=loginform.html" />';
		// 	}
		// }else{//ログインしている
		// 	echo "ログインしています。";
		// }
	?>
</body>
</html>