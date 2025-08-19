<?php
$list1 = [1,2,3];
$list2 = [1,2,3];

function mergeTwoLists($list1 , $list2){
    $i = 0;
    $j = 0;
    $output = [];
    
    while($i < count($list1) && $j < count($list2)){
        if($list1[$i] < $list2[$j]){
            $output[] = $list1[$i];
            $i++;
        } else {
            $output[] = $list2[$j];
            $j++;
        }
    }
    
    return $output;
};


    $result = mergeTwoLists($list1 , $list2);
print_r($result);
?>