<?php
require('helpers.php');
// array_merge(array ...$arrays): array
$array=[1,2,3,4,5];
$array2=[6,7,8,9,10];
$array3=[11,12,13,14,15];
$merged = array_merge($array, $array2, $array3);
prettyPrintArray($merged);
// if you use the same key in another array, the last one will be used (overwrite)
// you can use keys and values to merge arrays