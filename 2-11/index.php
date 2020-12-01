<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        名前：<input type="text" name="my_name" />
        <br>
        パスワード：<input type="password" name="password" />
        <br>
        メールアドレス：<input type="text" name="email">
        <br>
        <input type="submit" value="送信" />
    </form>

    <?php

    echo "・仕様書・設計書とは" . "<br>";
    echo "仕様書はこうなるべきと言う仕様を書いたもので、設計書は決めた仕様をどの様に作るかを決めるもの。" . "<br>";
    echo "・Gitとは" . "<br>";
    echo "Gitとは分散型バージョン管理システムのことで、ファイルのバージョン管理を簡単に行うことが出来る。" . "<br>";
    echo "・マージツールとは" . "<br>";
    echo "FDLファイルまたはDTDファイルの変更内容をMDLファイルにマージすることが出来る。" . "<br>";

    ?>
</body>
</html>