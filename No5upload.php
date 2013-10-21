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