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
    $pr = 0;
    $sec = 0;
    for($i = 0; $i<$length; $i++){
        $sub_len = count($arr[$i]);
        for($j = 0; $j<$sub_len; $j++){
            $primary += $arr[$i][$pr];
            break;
        }
        for($k = $sub_len; $k >= 0; $k--)
        {

        }
    }

    // return $result;
}
$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
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
