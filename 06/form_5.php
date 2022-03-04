<?php

$num_1 = '';
$num_2 = '';
$num_3 = '';
$err_msg = '';
$num = '';

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];
    $num_3 = $_POST['num_3'];
    if (empty($num_1) or empty($num_2) or empty($num_3)) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $num = $_POST['num_1'] + $_POST['num_2'] + $_POST['num_3'];
    }
    $num = h($num);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複数のフォーム</title>
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
            <label for="num_1">1つめの数字</label>
            <br>
            <input type="number" name="num_1" value="<?= $$num_1 ?>">
            <br>
            <label for="num_2">2つめの数字</label>
            <br>
            <input type="number" name="num_2" value="<?= $num_2 ?>">
            <br>
            <label for="num_3">3つめの数字</label>
            <br>
            <input type="number" name="num_3" value="<?= $num_3 ?>">
        </div>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
        <p>
            <?php
            if ($num_1 && $num_2 && $num_3) {
                echo "合計値は {$num} です。";
            }
            ?>
        </p>
    </form>
</body>

</html>