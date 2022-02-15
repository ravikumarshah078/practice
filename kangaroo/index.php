<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

// def kangaroo(x1, v1, x2, v2): if x2>x1 and v2>v1: return 'NO' elif (v2-v1) != 0 and (x2-x1)%(v1-v2)==0: return 'YES' else: return 'NO'

// static String kangaroo(int x1, int v1, int x2, int v2) {

//     if (v1 > v2) {
        
//         int remainder = (x1 - x2) % (v2 - v1);
        
//         if (remainder == 0) {
//             return "YES";
//         }
//     }
//     return "NO";

// }

function kangaroo($x1, $v1, $x2, $v2)
{
    // Write your code here
    if ($x2 > $x1 && $v2 > $v1) {
        return "NO";
    }else if(($v2 - $v1) !=0 && ($x2-$x1)%($v1-$v2)==0){
        return "YES";
    }
    return "NO";
}

echo kangaroo(0, 3, 4, 2);
exit;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($fptr);
