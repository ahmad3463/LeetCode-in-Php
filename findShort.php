<?php
// Simple, given a string of words, return the length of the shortest word(s).

// String will never be empty and you do not need to account for different data types.

function findShort($str)
{
    if ($str === '') {
        return false;
    }

    $arry = explode(" ", $str);
   $shortest = strlen($arry[0]);
    foreach($arry as $item){
        $splitcount = strlen($item);
        if($splitcount < $shortest){
            $shortest = $splitcount;
        }
    }

   
    return $shortest;
}

$str = "bitcon take over the world maybe who knows prehaps";
echo findShort($str);
// print_r(findShort($str));
?>