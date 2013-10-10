<?php
 $db_user = "n0bisuke"; //n0bisuke
 $db_pass = "n0bisuke!n0bisuke";
 $db_name = "n0bisuke";

 $mysqli = new mysqli('localhost', $db_user, $db_pass, $db_name);
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="" method="post">
	<input type="text" name="comment">
	<input type="submit">
</form>

<?php
 if(!empty($_POST['comment'])){
 	$mysqli->query("INSERT INTO `boards` (`comment`) VALUES ('".$_POST['comment']."')");
 }


 $result = $mysqli->query("SELECT * FROM `boards`");
 foreach ($mysqli->query($sql) as $key => $value) {
 	echo $row['id'].":";
 	echo $row['comment'].",";
 	echo $row['timestamp']."<br />";
 }
 

?>
</body>
</html>