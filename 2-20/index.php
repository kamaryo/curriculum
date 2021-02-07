<?php

$messages = ['a', 'b', 'c'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= htmlspecialchars($messages['1'], ENT_QUOTES, 'utf-8'); ?>
</body>
</html>