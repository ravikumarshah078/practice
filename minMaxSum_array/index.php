<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    sort($arr);
    $min = array_sum($arr) - end($arr);
    $max = array_sum($arr) - reset($arr);

    echo $min." ".$max;
}

miniMaxSum([1,2,3,4,5]);
exit;

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
