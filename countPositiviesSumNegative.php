<?php
//Given an array of integers.

//Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

//If the input is an empty array or is null, return an empty array.

function countPositivesSumNegatives($input)
{
    if ($input == [] || $input == null) {
        return [];
    }

    $countPostivies = 0;
    $countNegatives = 0;

    foreach ($input as $num) {
        if ($num > 0) {
            $countPostivies++;
        } elseif ($num < 0) { 
            $countNegatives += $num;
        }
    }

    return [$countPostivies, $countNegatives];
}

$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];
// echo countPositivesSumNegatives($input);
echo "<br>";
echo "<br>";
echo "<br>";
print_r(countPositivesSumNegatives($input))
?>