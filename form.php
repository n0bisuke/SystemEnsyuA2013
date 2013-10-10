<!-- form.php -->
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		var_dump($_POST["answer"]);
		$jikantai = $_POST["jikantai"];
		if($jikantai === "朝"){
			echo "おはよー";
		}
	?>
</body>
</html>