<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    $time = explode(':',$s);
    $hh = $time[0];
    $mm = $time[1];
    $ss = str_split($time[2],2)[0];
    if(str_contains($s,'PM') && $hh != 12){
        $hh += 12;
    }
    if(str_contains($s,'AM') && $hh == 12){
        $hh = '00';
    }
    return $hh.":".$mm.":".$ss;
}

$s = '12:40:22AM';
print_r(timeConversion($s));
exit;
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
