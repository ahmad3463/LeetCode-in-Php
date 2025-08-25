<?php
//Write a function that takes in a string of one or more words, and returns the same string, but with all words that have five or more letters reversed (Just like the name of this Kata). Strings passed in will consist of only letters and spaces. Spaces will be included only when more than one word is present.

    function spinWords($str){
        $array = explode( " " , $str);

        foreach($array as $key => $item){
            if(strlen( $array[$key]) >= 5){

                $array[$key] = strrev($item);
            }
        
        }

        return  implode(" " , $array);

    }



    $str = "this is another  test";
    echo spinWords($str);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    print_r(spinWords($str))
  
?>