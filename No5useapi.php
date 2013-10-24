<?php
	//APIのリクエストURL
	$url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=200010";
	//jsonファイルの読み込み
	$json = file_get_contents($url);
	$obj = json_decode($json, true);
	//var_dump($obj);
	echo $obj['title'];
	echo "<br />";
	echo $obj['description']['text'];
?>