<?php
// In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.

    function highAndLow($numbers){

    $array = explode(" " , $numbers);
    $highest = max($array);
    $lowest  = min($array);

    // Step 3: Return them as a string
    return $highest . " " . $lowest;


    }

    $numbers = "1 2 3 4 5 6 7 8 9";
    echo highAndLow($numbers);
    // print_r(highAndLow($numbers))


?>