<?php

//Can you find the needle in the haystack?

//Write a function findNeedle() that takes an array full of junk but containing one "needle"

//After your function finds the needle it should return a message (as a string) that says:

//"found the needle at position " plus the index it found the needle, so:


    function findNeedle($haystack){
        $name = 'needle';

        $postion = array_search($name , $haystack);

       return "found the needle at position" . $postion;
    }

    $haystack = ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"];

    print_r(findNeedle($haystack));

?>