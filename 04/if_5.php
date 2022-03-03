<?php

$num = 10;

// ここに処理を記述

if ($num == 1) {
    echo "{$num}は素数ではありません";
}

if ($num == 2) {
    echo "{$num}は素数です";
}



for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo "{$num}は素数ではありません";
    } else {
        echo "{$num}は素数です";
    }
    break;
}
