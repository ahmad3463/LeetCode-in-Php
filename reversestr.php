<?php
// Write a function that reverses a string. The input string is given as an array of characters s.

// You must do this by modifying the input array in-place with O(1) extra memory.

function reverStr($s){
    $left = 0;
    $right = count($s) - 1;

    while($left < $right)
    {
        $temp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $temp;
        $left++;
        $right--;
    }
};

$s = ["H" , "l" ,"l" ,"o"];
 reverStr($s);
 print_r($s);
?>