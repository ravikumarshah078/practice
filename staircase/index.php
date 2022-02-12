<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
    // Write your code here
    // Outer loop handles number of rows
    for($i = 1; $i <= $n; $i++) {
        // print spaces according to the last item position
        $si = 1;
        while( $si <= ($n - $i)){
            print(" ");
            $si++;
        }
        // print the items
        for($j = 1; $j <= $i; $j++) {
            print("#");
        }
        // separate rows
        print("\n");
    }
}

staircase(5);
exit;

$n = intval(trim(fgets(STDIN)));

staircase($n);
