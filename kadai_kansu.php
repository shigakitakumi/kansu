<?php
function twice($number){
    return $number *2;
}
echo twice(10);
echo "\n";

function f($a, $b){
    return $a + $b;
}
echo f(3,5);
echo "\n";

function multiple($arr){
    $result = 1;
    foreach($arr as $num){
        $result *= $num;
    }
    return $result;
}
echo multiple([1,3,5,7,9]);
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array([10,8,24,3]);
 echo "\n";
?>