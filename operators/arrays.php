<?php


// ejemplo 1

// $array1 = [
// 0 => 'a',
// 1 => 'b',
// 2 => 'c'
// ];
//
$array2 = [
    3 => 'd',
    4 => 'e'
];

$result = $array1 + $array2;
var_dump($result);


$array1 = [
0 => 'a',
1 => 'b',
2 => 'c'
];

$array2 = ['a', 'b','c'];
var_dump($array1 == $array2);
