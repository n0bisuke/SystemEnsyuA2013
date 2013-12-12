<?php
// #No5upload.php
// 4.1.0より前のPHPでは$FILESの代わりに$HTTP_POST_FILESを使用する必要
// があります。
require_once("../function.php"); //DB接続情報
if($_FILES['userfile']['type'] != "image/jpeg"){
	echo "アップロード出来るファイルの種類はjpegのみです。";
	exit(1); //エラー
}else{
	$uploaddir = '/home/n0bisuke/public_html/'; //アップロードするディレクトリ
	$newfilename = date("YmdHis")."-".$_FILES['userfile']['name']; //ファイル名を一意にする．
	$uploadfile = $uploaddir . basename($newfilename);
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
		echo "アップロード成功で〜す。";
		$user_id = 1; //投稿するユーザID
		$comment = "テスト"; //投稿コメント内容
		//DBに保存
		$mysqli->query("INSERT INTO `boards` (`user_id`,`comment`,`file`)
				VALUES ('".$user_id."','".$comment."','".$newfilename."')");
 	}
 	exit; //正常終了
}


// $uploaddir = '/home/n0bisuke/public_html/';
// $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

//echo '<pre>';
var_dump($_FILES);
//$flag = ""; //エラーフラグ

//ファイルの種類がjpegまたはpng以外はエラー
//if($_FILES['userfile']['type'] != ("image/jpeg" || "image/png"))$flag .= "利用出来ないファイル形式です．";
//ファイルのサイズが50KB以上ならエラー


// 4.1.0より前のPHPでは$FILESの代わりに$HTTP_POST_FILESを使用する必要
// があります。

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";




// //ファイルの種類がjpegまたはpng以外はエラー
// if($_FILES['userfile']['type'] != ("image/jpeg" || "image/png"))$flag .= "利用出来ないファイル形式です．";
// //ファイルのサイズが50KB以上ならエラー
// if($_FILES['userfile']['size'] >= 51200)$flag .= " ファイルサイズが大きすぎます．";

// echo $_FILES['userfile']['size'];
// echo ($flag == "") ? "成功" : $flag;
//echo "<br />";
//echo $_FILES['userfile']['size'];){

// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//     echo "File is valid, and was successfully uploaded.\n";
// } else {
//     echo "Possible file upload attack!\n";
// }

// echo 'Here is some more debugging info:';
// print_r($_FILES);

//print "</pre>";
?>