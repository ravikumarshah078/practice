<?php

/*
 * Complete the 'jumpingOnClouds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY c as parameter.
 */

function jumpingOnClouds($c) {
    // Write your code here
    $jumps = 0;
    
    for($i = 0; $i< count($c); $i++)
    {
        
    }

    // return $jumps;
}

echo jumpingOnClouds([0,0,1,0,0,1,0]);
exit;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$c_temp = rtrim(fgets(STDIN));

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($fptr);
