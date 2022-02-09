<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $number = count($arr);
    for($i = 0; $i<$number; $i++){
        if($arr[$i] > 0){
            $positive++;
        }else if($arr[$i] < 0){
            $negative++;
        }else{
            $zero++;
        }
    }
    echo sprintf('%0.6f', $positive/$number)."\r\n";
    echo sprintf('%0.6f', $negative/$number)."\r\n";
    echo sprintf('%0.6f', $zero/$number)."\r\n";
}

plusMinus([-4, 3, -9, 0, 4, 1]);
exit;

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
