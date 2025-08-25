<?php


    function reverseWords($str){
       $array = explode( " " , $str);

       foreach($array as &$item){
        $item = strrev($item);
       }
       return implode(" " , $array);

    }

    $str = "The quick brown fox jumps ver the lazy dog.";
    echo reverseWords($str);
    // print_r(reverseWords($str))
?>