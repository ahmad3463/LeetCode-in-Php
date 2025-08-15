<?php

    function fizzBuzz($n){
        $answer = [];

        for($i = 1; $i <= $n ; $i++){
            
            if($i % 3 == 0 &&  $i % 5 == 0 ){
                $answer[] = "fizzBuzz";
            }elseif($i % 3 == 0){
                $answer[] = "Fizz";
            }elseif($i % 5 == 0){
                $answer[] = "Buzz";
            }else{
                $answer[] = (string)$i;
            }
        }
        return $answer;
    }
    $n = 15;
    print_r(fizzBuzz($n));
?>