<?php
require 'helpers.php';
// array_combine(array $keys, array $values): array
$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];
prettyPrintArray(array_combine($array1, $array2));
// combine will give error if the arrays are not the same size
// array 1 keys and array 2 values
