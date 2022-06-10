<?php
require 'helpers.php';
//array_map (callable|null $callback, array $array, array ...$arrays): array
$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10];

$array = array_map(fn($number1,$number2)=>$number1 * $number2 * 3, $array1, $array2);
prettyPrintArray($array);