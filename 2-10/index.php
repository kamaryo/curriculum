<?php

function Volume($vertical, $horizontal, $height, $unit){
    $anser = $vertical * $horizontal * $height;
    printf("%d[%s^3]", $anser, $unit);
}

Volume(5, 10, 8, cm);

echo "<br>";

echo "・ハッシュ化とは" . "<br>";
echo "特定の文字列や数字の羅列を、一定のルール（ハッシュ関数）に基づいた計算手順によって別の値（ハッシュ値）に置換すること。" . "<br>";
echo "・総合テストとは" . "<br>";
echo "システムテストとも言う。構築したシステムが全体で予定通りの機能を果たして居るか、また機能や性能が仕様書通りに構築できて居るかを検証すること。" . "<br>";
echo "・デバッグとは" . "<br>";
echo "バグと呼ばれるプログラムや関数の間違いを見つけ、それらを排除すること。バグフィックスと呼ばれることもある。
デバッガと言う支援ツールを使用しバグの発見を行うことが多い。" . "<br>";

?>
