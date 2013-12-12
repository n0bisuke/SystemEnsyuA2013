<?php 
	$names = "takato,kobayashi,teduka,hattori,danda,oshitani,nakada,muraoka,hiroyuki,nobisuke";
	$tmp = explode(",",$names); //カンマ区切り
	//var_dump($tmp);
	
	//最長の文字数を取得
	$count = 0;
	foreach($tmp as $value){
		$newcount = strlen($value);
		if($count < $newcount){
			$count = $newcount;
		}
	}
	//echo $count;

	//文字列を文字に分割し，最長の長さにあわせて空白を入れる
	foreach ($tmp as $key => $value) {
		for ($i=0; $i < $count; $i++) { 
			if(!empty($value[$i])){
				$newlist[$key][$i] = $value[$i];				
			}else{
				$newlist[$key][$i] = ' ';
			}

		}
	}

	//var_dump($newlist);
	//表示
	for ($i=0; $i < $count; $i++) { //行 --最長の長さ分ループ
		for ($j=0; $j < count($tmp); $j++) { //列 --人数分るーぷ
			echo "|".$newlist[$j][$i];
		}
		echo "|<br />";
	}

?>