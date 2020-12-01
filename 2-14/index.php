<?php

echo "[1]" . "<br>";
echo "次の配列[24, 89, 30, 99, 86, 54]の(1)個数を求め、(2)小さい順に並べ替える。" . "<br>";
echo "(3)配列の中に30があるかを調べ、会ったらTrue,なかったらFalseを出力する" . "<br>";
echo "(4)配列の要素を','で区切って出力する" . "<br>";
echo "(5)「21:34:54」を配列で取得し、var_dumpで出力する" . "<br>";

$array = [
    24,
    89,
    30,
    99,
    86,
    54,
];

echo "答え" . "<br>";

echo "(1):" . count($array) . "<br>";

sort($array);

echo "(2):" . "<br>";
print_r($array) . "<br>";
echo "" . "<br>";

echo "(3):";
if(in_array(30, $array)){
    echo "True" . "<br>";
} else {
    echo "False" . "<br>";
}

$implodedArray = implode(",", $array);
echo "(4):";
echo $implodedArray;
echo "<br>";

echo "(5):";

$time = "21:34:54";

$explodedTime = explode(":", $time);
var_dump($explodedTime);
echo "<br>";


echo "・要件定義（要求仕様書）とは" . "<br>";
echo "要件定義とは、お客様の要求定義をいかにシステム化していくかを定義するシステム開発の土台となるもの。" . "<br>";
echo "・単体テスト・結合テストとは" . "<br>";
echo "単体テストとは、プログラムを構成する比較的小さな単位がここの機能を正しく果たして居るかを検証するテスト　<br>
結合テストとは、内部結合テストと外部結合テストに分かれ、内部結合テストはサブシステム内の機能連携、外部結合テストはサブシステム間の連携機能や他システムとの連携機能を検証する。" . "<br>";
echo "・テスト仕様書（どの様なもの、項目）" . "<br>";
echo "実装が終了し、リリースに向かって行うテスト。項目としては主に『単体テスト・結合テスト・機能テスト・システムテスト・受入テスト・運用テスト・リグレッションテスト』が挙げられる。" . "<br>";



?>