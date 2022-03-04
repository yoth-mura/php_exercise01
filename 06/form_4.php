<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$operator = $_GET['operator'];

if ($operator == 'addition') {
    $total1 = $num1 + $num2;
    echo "{$num1} + {$num2} = {$total1}";
} elseif ($operator == 'subtraction') {
    $total2 = $num1 - $num2;
    echo "{$num1} - {$num2} = {$total2}";
} elseif ($operator == 'multiplication') {
    $total3 = $num1 * $num2;
    echo "{$num1} * {$num2} = {$total3}";
} elseif ($operator == 'division') {
    $total4 = $num1 / $num2;
    echo "{$num1} / {$num2} = {$total4}";
} else {
    echo '正しい演算子を指定して下さい';
}
