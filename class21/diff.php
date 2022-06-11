<?php
require 'helpers.php';
$array1 = ['a' => 1, 'b' => 2, 'd' => 3, 'p' => 4, 'e' => 5];
$array2 = ['d' => 4, 'k' => 1, 'y' => 8, 'i' => 9, 'j' => 10];
$array3 = ['k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15];
prettyPrintArray(array_diff($array1, $array2, $array3)); // if you wanna compare the values
prettyPrintArray(array_diff_assoc($array1, $array2, $array3)); // if you wanna compare the keys or values
prettyPrintArray(array_diff_key($array1, $array2, $array3)); // if you wanna compare ONLY the keys
