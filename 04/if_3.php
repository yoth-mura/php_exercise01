<?php

$score = 19;

// ここに処理を記述
if ($score >= 60) {
    echo '合格です';
} elseif ($score >= 30) {
    echo '追試です';
} elseif ($score < 30) {
    echo '不合格です';
}
