<?php
//Consider an array/list of sheep where some sheep may be missing from their place. We need a function that counts the number of sheep present in the array (true means present).
function countSheep($arr){
    if(empty($arr)){
        
        return 0;
    }

    $count = 0;

    foreach ($arr as $sheep){
        if($sheep === true){
            $count++;
        }
    }
    return $count;
}


$arr = [true ,true ,true , false , true ,true ,true ,true ,true , false , true , false ,true ,false, false, true, true ,true ,true ,true ,  false ,false ,true ,true ,true ,];

    echo countSheep($arr);
    echo '<br>';
    echo '<br>';
    print_r(countSheep($arr))
?>