<!-- count（要素の数を数える） -->
<?php
$members = ["takahashi", "kimura", "yoshida", "uchida"];
echo count($members);
echo "<br>";

// sort（要素の並べ替え）
$members = ["tanaka", "akimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
echo "<br>";

$numbers = [1, 35, 17, 9, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";

// in_array（配列に中にある要素が存在しているか）
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("takahashi", $members));
echo "<br>";

$members = ["sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo "<br>";

// implode（配列を結合して文字列に変換）
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode(",", $members);
var_dump($atstr);
echo "<br>";

// explode（文字列を指定の区切りで配列にする）
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode(",", $members);
var_dump($atstr);

$re_members = explode(",", $atstr);
var_dump($re_members);
echo "<br>";

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);