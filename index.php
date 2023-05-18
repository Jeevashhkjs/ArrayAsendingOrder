<?php

$array = [4, 1, 2, 5];
$result = [];
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    do {
        for ($i = count($array); $i >= 0; $i--) {
            if($i < count($array) - 1){
                if ($array[$i] < $array[$i + 1]) {
                    $temp = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $temp;
                    // $result[] = $array;
                    //
                    array_push($result, $array);
                }
            }
        }
    } while (! isDescendingOrder($array));
    print_r($result);
}
function isDescendingOrder($array)
{
    for ($i = 0; $i < count($array) - 1 ; $i++) {
        if($i < count($array)-1){
            if ($array[$i + 1] > $array[$i]) {
                return false;
            }
        }
    }
    return true;
}

//function isDescendingOrder($getArray){
//    for($i=count($getArray)-1;$i>=0;$i--){
////        if($i > 0){
//        if($getArray[$i+1] > $getArray[$i]){
//            echo true;
//        }
////        }
//    }
////    echo true;
//}
//
//isDescendingOrder($array);