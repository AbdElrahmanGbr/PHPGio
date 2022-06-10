<?php

require 'helpers.php';
//array_filter(array $array, callable|null $callback = null, int $mode = 0): array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even = array_filter($array,fn($number, $key)=>$number % 2 === 0, ARRAY_FILTER_USE_BOTH);

prettyPrintArray($even);