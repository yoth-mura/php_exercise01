<?php

$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
    if (empty($age)) {
        $err_msg = '年齢を入力して下さい';
    }
}
$age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>バリデーションの作成</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <?php if ($err_msg) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="age">年齢</label>

            <input type="number" name="age" id="age" value="<?= $age ?>">
        </div>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
        <p>
            <?php
            if ($age) {
                echo "私は{$age} 歳です。";
            }
            ?>
        </p>
    </form>
</body>

</html>