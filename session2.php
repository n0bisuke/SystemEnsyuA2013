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
 	if(empty($_SESSION["count"])){//はじめて
 		$_SESSION["count"] = 1;
 	}else{ //にかいめ
 		$_SESSION["count"]++;
 	}
 ?>
 こんにちは <?php echo $_SESSION['count']; ?> 回目ですね
</body>
</html>