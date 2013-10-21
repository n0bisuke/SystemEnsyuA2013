<?php
$data = "hogehoge";

if(preg_match("/^[a-zA-Z]+$/", $data)){
	echo "半角文字っぽいです";
}else{
	echo "半角文字っぽくないです";
}