<?php require_once("../function.php"); ?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" media="screen,print" href="style.css" />
</head>
<body>
	
	<?php
		//フォームからの投稿をデータベースに保存
		if(!empty($_POST['comment'])){//コメントが入力されたら実行
			$mysqli->query("INSERT INTO `board` (`name`,`title`,`comment`) 
				VALUES ('".$_POST['name']."','".$_POST['title']."','".$_POST['comment']."')");
		}
	 
		//コメントを削除
		if(!empty($_POST['del'])){//削除ボタンが押されたら実行
			$mysqli->query("DELETE FROM `board` WHERE `id` = ".$_POST['del']);
		}

		//編集 jQuery.post()を使う
		if(!empty($_POST['edit_mes'])){
			$edit_mes = $_POST['edit_mes'];
			$edit_id = $_POST['edit_id'];
			$edit_col = $_POST['edit_col'];
			$mysqli->query("UPDATE `board` SET  `".$edit_col."` =  '".$edit_mes."' WHERE  `board`.`id` =".$edit_id.";");
			header("Location: " . $_SERVER['PHP_SELF']); //ページリロード
		}

		//usersテーブルとboardsテーブルの連結
		$sql = "SELECT * FROM  `board` ORDER BY  `board`.`id` DESC ";
	?>

	<!-- タイトル部分を表示する -->
	<table id="data-list">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>title</th>
			<th>comment</th>
			<th>timestamp</th>
			<th><!-- 編集ボタン用 --></th>
			<th><!-- 削除ボタン用 --></th>
		</tr>
	<!-- データベースの内容を表示する -->
	<?php foreach ($mysqli->query($sql) as $key => $value): ?>		
		<tr>
		    <td class="edit-id"><?php echo $value['id']; ?></td>
		    <td class="edit" title="li"><?php echo $value['name']; ?></td>
		    <td class="edit" title="li"><?php echo $value['title']; ?></td>
		    <td class="edit" title="li"><?php echo $value['comment']; ?></td>
		    <td class="edit" title="li"><?php echo $value['timestamp']; ?></td>
		    <td>
		    	<!-- 編集ボタン -->
		    	<form action="edit.php" method="post">
		    		<input type="hidden" name="edit" value=<?php echo $value['id']; ?>>
					<input type="submit" value="編集">
				</form>
			</td>
		    <td>
		    	<!-- 削除ボタン -->
		    	<form action="dbconnect.php" method="post">
		    		<input type="hidden" name="del" value=<?php echo $value['id']; ?>>
					<input type="submit" value="削除">
				</form>
			</td>
		</tr>
		
	<?php endforeach; ?>
	</table>
	<span id="submit"></span>
	
	<!-- 入力フォーム -->
	<form action="dbconnect.php" method="post">
		名前:
		<input type="text" name="name" value="のびすけ"><br />
		タイトル:
		<input type="text" name="title" value="テスト投稿"><br />
		本文:
		<input type="text" name="comment"><br />
		<input type="submit">
	</form>
	<script src="http://jsdo.it/lib/jquery-1.8.0/js"></script>
	<script src="index.js"></script>
</body>
</html>

<?php
// #No5upload.php
// 4.1.0より前のPHPでは$FILESの代わりに$HTTP_POST_FILESを使用する必要
// があります。
$uploaddir = '/home/n0bisuke/public_html/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
var_dump($_FILES);
$flag = ""; //エラーフラグ

//ファイルの種類がjpegまたはpng以外はエラー
if($_FILES['userfile']['type'] != ("image/jpeg" || "image/png"))$flag .= "利用出来ないファイル形式です．";
//ファイルのサイズが100KB以上ならエラー
if($_FILES['userfile']['size'] >= 10000)$flag .= " ファイルサイズが大きすぎます．";

echo $_FILES['userfile']['size'];
echo ($flag == "") ? "成功" : $flag;
//echo "<br />";
//echo $_FILES['userfile']['size'];){

// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//     echo "File is valid, and was successfully uploaded.\n";
// } else {
//     echo "Possible file upload attack!\n";
// }

// echo 'Here is some more debugging info:';
// print_r($_FILES);

print "</pre>";
?>