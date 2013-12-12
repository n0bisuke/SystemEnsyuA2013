<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>カレンダー</title>
</head>
<body>
	<?php
		$week = ["日","月","火","水","木","金","土"]; //曜日をセット
		$today = date("Y年m月d日"); //今日
		$end = date("t"); //月末の日
		$w = date("w", strtotime(date("Y-m-01", time()))); //月初めの曜日
		echo $today;
	?>
	<br />
	<!-- 曜日を出力 -->
	<?php foreach ($week as $key => $value)echo $value."|";?>
	<br />

	<!-- マスを出力 -->
	<?php
		//曜日分__を配列に格納
		for($i=0; $i < $w; $i++) $tmp[] = "__";
		//日付を配列に追加
		for($i=1; $i <= $end; $i++)$tmp[] = ($i < 10) ? " ".(string)$i : (string)$i; 
	?>

	<!-- 一週間毎に改行して表示 -->
	<?php
		foreach ($tmp as $key => $value) {
			echo $value."|";
			if(($key+1) % 7 == 0) echo "<br />";
		}
	?>
</body>
</html>