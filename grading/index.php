<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

use LDAP\Result;

function gradingStudents($grades)
{
    // Write your code here
    $result = [];
    foreach ($grades as $grade) {
        $roundGrade = (ceil($grade / 5) * 5);
        if ($roundGrade - $grade < 3 && $roundGrade >= 40) {
            array_push($result, $roundGrade);
        } else
            array_push($result, $grade);
    }
    return $result;
}

print_r(gradingStudents([73, 67, 38, 33]));
exit;


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
