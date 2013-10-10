<?php
	session_start(); //セッションを使いますよ〜って宣言
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		//セッション変数countに値が入ってるかチェック。
		if(empty($_SESSION['count'])) { //countが空ならば，(=初めてページを見たとき)
		   $_SESSION['count'] = 1; //countを1に
		}else{ //二回目以降ページを見たとき
		   $_SESSION['count']++; //countをインクリメントする
		}
	?>
	<p>こんにちは、あなたがこのページに来たのは
		<?php echo $_SESSION['count']; ?>回目ですね。</p>
</body>
</html>