<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの作成2</title>
</head>

<body>
    <form action="form_2_post.php" method="post">
        <div>
            <label for=""><?= htmlspecialchars('名前', ENT_QUOTES, 'UTF-8') ?></label>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>