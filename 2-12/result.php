<?php

$yourname = $_POST['yourname'];
$gifts = $_POST['gifts'];
$amount = $_POST['amount'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>お名前：<?php echo $yourname; ?></p>
    <p>ご希望景品：<?php echo $gifts; ?></p>
    <p>個数：<?php echo $amount; ?></p>
    <a href="index.php">戻る</a>
</body>
</html>