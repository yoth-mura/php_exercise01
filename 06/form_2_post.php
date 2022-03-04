<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '私の名前は';
    echo $_POST['message'];
    echo 'です。'. '<br>' . '<br>';

}

$h = $_SERVER['HTTP_HOST'];

// リファラ値があれば、かつ外部サイトでなければaタグで戻るリンクを表示
if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], $h) !== false)) {
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">戻る</a>';
}
