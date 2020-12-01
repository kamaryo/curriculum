<?php

// $array  = range(1,100,1); 

// for ($i = 0; $i< count($array); $i++){
//     if( $array[$i] % 3 ===0 && $array[$i] % 5 ===0){
//         $array[$i] = "FizzBuzz!!";
//     } elseif($array[$i] % 3 ===0){
//         $array[$i] = "Fizz!";
//     } elseif($array[$i] % 5 ===0){
//         $array[$i] = "Buzz!";
//     }
// }

$array = [];

$i = 1;

while($i < 101){
    if ($i % 3 == 0 && $i % 5 == 0 ){
        $array[$i] = "FizzBuzz!!";
    } elseif($i % 3 == 0) {
        $array[$i] = "Fizz!";
    } elseif($i % 5 == 0) {
        $array[$i] = "Buzz!";
    } else {
        $array[$i] = $i;
    }
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php foreach($array as $value): ?>
        <?php echo $value . PHP_EOL; ?><br>
    <?php endforeach; ?></p>
    <p>パフォーマンスとは</p>
    <p>コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量のこと</p>
    <p>スロークエリとは</p>
    <p>データベースにおいて時間のかかっているSQLのこと</p>
    <p>クエリログとは</p>
    <p>実行したSQLの履歴のこと</p>
</body>
</html>