<?php
/*
1. Declare a array
2. Initialize loop less dhan 1 count of array
3. Initialize second loop less dhan 2 count of second array
4. compare
 */

$input = [2,3,1];

$output = [];
for($i=0;$i<count($input);$i++){

    if($input[$i] > $input[$i +1]){
//        array_push($output,$input[$i]);
    }else{
            $a = $input[$i];
            $b = $input[$i + 1];

            $input[$i] = $b;
            $input[$i + 1] = $a;
            array_push($output,$input);
    }

}
$revArray = array_reverse($output);

print_r($output);
