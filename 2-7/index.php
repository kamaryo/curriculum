<?php

$array = [
    "red" => "赤",
    "blue" => "青",
    "green" => "緑",
];

var_dump($array);
echo "<br>";

$array["yellow"] ="黄色";

var_dump($array);
echo "<br>";

echo "・プルリクエストとは" . "<br>";
echo "コード変更をレビュワーに通知し、マージを依頼する機能。記述ミスの発見やコードの指摘をすることが出来る" . "<br>";
echo "・Git Flowとは" . "<br>";
echo "Gitの開発手法であり、master, release, develop, feature, hot-fixの５つのブランチを使い分けて開発を行うこと" . "<br>";
echo "master...リリースしたデータを置いておくブランチ, release...リリース前に準備、微調整を行うブランチ, 
develop...開発を行うブランチ, feature...開発を行うブランチで、ここの実装やバグの解決を行う, hot-fix...リリースされているデータに緊急の修正対応をするためのブランチ," . "<br>";
echo "・CRONとは" . "<br>";
echo "UNIXに入って居るプログラムの一つで、時間とプログラムを指定して、その時間にそのプログラムを実行してくれるプログラム" . "<br>";


?>