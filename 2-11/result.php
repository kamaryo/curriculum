<?php

$my_name = $_POST['my_name'];
$password = $_POST['password'];
$email = $_POST['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>21
    <p>私の名前は、<?php echo $my_name; ?></p>
    <p>私メールアドレスは、<?php echo $email; ?></p>
    <p>私のパスワードは、<?php echo $password; ?></p>
    <a href="index.php">戻る</a>
</body>
</html>
