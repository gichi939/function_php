<?php


function sum($max) {
    $result = $max*2;
    return $result;
}

echo sum(10);
echo "\n";

function f($a, $b) {
    return $a + $b;
}
    echo f(10, 5);
    echo "\n";
    
function multiply($arr) {
    
    $num = 1;
    
    $array = $arr;
    
    
    foreach($array as $add) {
        $num *= $add;
    }
    return $num;
}
    echo multiply(array(1,3,5,7,9));
    echo "\n";

function max_array($arr) {
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
        return $max_number;
}
    echo max_array(array(1,4,5,12,3));
    echo "\n";
    
    // strip_tags
    $text = '<p>Test paragraph.</p> <a href="#fragment">Other text</a> <div>helloworld</div>';
    echo strip_tags($text);
    echo "\n";
    
    echo strip_tags($text, '<p><div>');
    
    // array_push
    $fruits = array("apple","banana",);
    array_push($fruits, "orange", "chery");
    print_r($fruits);
    
    // array_merge
    $number1 = array(1,3,5,7,9);
    $number2 = array(2,4,6,8);
    $result = array_merge($number1,$number2);
    print_r($result);
    
    // timestanp
    $timestamp = mktime(18, 53, 0, 5, 8, 2020);
    echo $timestamp;
    echo "\n";
    
    echo date('Y m d l G:i:s A e')
?>