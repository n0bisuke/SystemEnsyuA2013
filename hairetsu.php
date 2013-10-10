<h3>$list</h3>
<?php
 $list = array(); //初期化 してもしなくてもいいです．
 $list = array(1,"takagi","sugawara");

 echo $list[0]." "; //=1 (整数型)
 echo $list[1]." "; //=takagi (文字列型)
 echo $list[2]." "; //=sugawara (文字列型)
?>
<hr>
<h3>$list2</h3>
<?php
 //この代入の仕方でも$listと同じになります．
 $list2[0] = 1;
 $list2[1] = "takagi";
 $list2[2] = "sugawara";

 //配列の中に配列を入れる事もできます．
 $list2[3] = $list;
 echo var_dump($list2); //var_dump()で配列の中身をまとめて表示してくれます．
?>
<hr>
<h3>$ensyuA</h3>
<?php
 $ensyuA = array(
 	"kyouin" => "takagi",
 	"TA" => array("sugawara","hurudate"),
 	"language" => "PHP"
 	);
 //preタグでvar_dump()を囲むと配列の中身を見易い形で出力してくれます．
 echo "<pre>"; 
 echo var_dump($ensyuA);
 echo "</pre>";
/*
PHPでは，後に何も処理を書かない場合は
明示的にphpの終了タグを記述しなくても大丈夫です．
*/