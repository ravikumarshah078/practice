<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $primary = 0;
    $secondary = 0;
    $length = count($arr);

    for($i = 0; $i<$length; $i++){
            $primary  += $arr[$i][$i];
            $secondary += $arr[$i][count($arr)-(1+$i)];
    }

    return abs($primary - $secondary);
}
$arr = [
    [1,2,3],
    [4,5,6],
    [9,8,9]
];

print_r(diagonalDifference($arr));

exit;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
