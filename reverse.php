<?php

$arr = [1,5,9];

$steps=[];

for ($i = 0; $i < count($arr)-1 ; $i++){
    for ($j = 0; $j < count($arr)- $i - 1; $j++) {
        if ($arr[$j] < $arr[$j + 1]) {
            $new =$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$new;
            $steps[] = $arr;
}
    }
}
print_r($steps);
