<?php
    //A substring is a contiguous (non-empty) sequence of characters within a string.

// A vowel substring is a substring that only consists of vowels ('a', 'e', 'i', 'o', and 'u') and has all five vowels present in it.

// Given a string word, return the number of vowel substrings in word.


function runningSum($nums) {
    $count = [];
    $array = 0;

    for($i = 0; $i < count($nums) ; $i++){
            $array += $nums[$i];
            $count[] = $array;
    };

    return $count;
}

$nums = [1,2,3,4];
print_r(runningSum($nums));

?>