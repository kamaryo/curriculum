<?php

echo "[1]:1~10のランダムな半径の円の面積を求め、答えを小数点で（１）繰り上げ、（２）繰り下げ、（３）四捨五入した値を求めよ" . "<br>";

function circleArea($r){
    return $r ** 2 * pi();
}

$radius = mt_rand(1,10);
$area = circleArea($radius);

echo "半径：" . $radius . "<br>";
echo "(1):" . ceil($area) . "<br>";
echo "(2):" . floor($area) . "<br>";
echo "(3):" . round($area) . "<br>";

echo "[2]:自分の名前を定義し、（１）名前の文字数、（２）下の名前が始まる場所を求め,（３）下の名前だけを取り出し、（４）最初の文字を大文字にする。" . "<br>";

$str = "kamagata ryohei";

echo "自分の名前：". $str . "<br>";

echo "(1)" . strlen($str) . "<br>";
echo "(2)" . strpos($str, "r") . "<br>";
$firstname = substr($str, -6);
echo "(3)" . $firstname . "<br>";
echo "(4)" . str_replace("r", "R", $firstname) . "<br>";

echo "[3]:printf、sprintfを用いて「鎌形は20歳です」と表示させる。" . "<br>";

$name = "鎌形";
$age = 20;

printf("%sは%d歳です。", $name, $age);
echo "<br>";
echo sprintf("%sは%d歳です。", $name, $age);
echo "<br>";
echo "<br>";

echo "PostgreSQL・OracleSQLとは" . "<br>";
echo "PostgreSQLとは全てのソースが無料で公開されているデータベースで、著作権の表示と免責事項を明記しておけば再利用も再配布を自由に行うことが出来る。" . "<br>";
echo "OracleSQLとはアメリカのOracle社が開発、販売して居るデータベース。データベースの中でも高い処理速度、信頼性、セキュリティを有して居る" . "<br>";
echo "TortoiseGit・TortoiseSVNとは" . "<br>";
echo "Gitをより扱いやすくするために開発されたWindows用ソフトウェアのこと。一通りの作業がマウスだけで行うことが出来る。" . "<br>";
echo "TortoiseSVNとは、Subversionのクライアントフロントエンド（各種入力をユーザーから受け取り、バックエンドが使える使用に合う様に加工する役割）となるソフトウェアのこと。" . "<br>";
echo "外部設計・内部設計とは" . "<br>";
echo "外部設計とは、操作画面やデータ入力など、ユーザーから見えるインターフェース部分の仕様を決定したり、セキュリティやシステム開発のスケジュールや費用などを設計したりと、ユーザーに向けた仕様を設計するもの" . "<br>";
echo "内部設計とは、ソフトウェアや情報システムの開発工程の一つで、全体の構成や行うべき処理の詳細など実装に必要な仕様を定義する工程。" . "<br>";

?>