<?php

    function validBraces($braces){
        $stack = [];
        $pair = [
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];

            for($i = 0 ; $i <strlen($braces); $i++ ){
                $ch = $braces[$i];

                if($ch === '(' || $ch === '[' || $ch === '{'){
                    array_push($stack,$ch);
                }else{
                    if(empty($stack) || array_pop($stack) !== $pair[$ch]){
                        return false;
                    }
                }


            }

            return empty($stack);
    }
    

    $braces = "[()";
    echo validBraces($braces);
?>