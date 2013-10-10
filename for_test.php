<h3>[use for()]</h3>
<?php
	//配列を用意
	$moriken_p[0] = "moriken";
	$moriken_p[1] = "e-learning";
	$moriken_p[2] = "ganriser";
	$moriken_p[3] = "http://sakumon.jp/app";

	//配列の中身をforで取得
	$count = count($moriken_p); //配列の個数を取得
	for ($i=0; $i < $count; $i++){
		echo "[".$i."] ".$moriken_p[$i];
		echo "<br />";
	}
?>

<hr />

<h3>[use foreach()] </h3>
<?php
	//連想配列を用意
	$moriken_p = array(
		"member" => array("takagi",
			"sugawara",
			"okutsu",
			"furudate",
			"inowe",
			"hayashi"),
		"specialty" => "e-learning",
		"other_project" => "ganriser",
		"url" => "http://sakumon.jp/app"
		);
	//配列の中身をforeachで
	foreach ($moriken_p as $key => $value) {
		echo "[".$key."] ".$value;
		echo "<br />";
	}
?>
<hr />

<h3>[use foreach() and for()]</h3>
<?php
	//二重ループで取得(多次元配列の内容取得)
	foreach ($moriken_p as $key => $value) {
		if(is_array($value)){//値が配列の場合
			//$valueが配列(多次元配列)の場合
			$count = count($value); //配列の個数を取得
			echo "[".$key."]";
			for($i=0; $i < $count; $i++){
				echo $value[$i].",";
			}
			echo "<br />";
		}else{
			echo "[".$key."] ".$value;
			echo "<br />";
		}
	}
?>