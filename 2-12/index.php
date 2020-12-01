<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        お名前：<input type="text" name="yourname">
        <br>
        ご希望商品：
        <input type="radio" name="gifts" value="A賞">A賞
        <input type="radio" name="gifts" value="B賞">B賞
        <input type="radio" name="gifts" value="C賞">C賞
        <br>
        個数：<select name="amount">
            <?php for($i = 1; $i < 11; $i++){ ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="申込">
    </form>
    <p>モジュールとは</p>
    <p>機器やシステムの一部を構成するひとまとまりの機能を持った部品で、システム中核部や他の部品への接合部の仕様が定義され、容易に追加や交換ができる様なものを示す。</p>
    <p>バージョン管理システムとは</p>
    <p>パソコン上で作成、編集されるファイルの変更履歴を管理するためのシステム。</p>
    <p>サブクエリとは</p>
    <p>SQV文の」結果を使ったSQL文</p>
</body>
</html>