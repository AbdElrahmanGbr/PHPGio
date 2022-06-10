<?php
require 'helpers.php';
//array_keys ( array $array [, mixed $search_value [, bool $strict = false ]]): array

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$keys = array_keys($array, 3, true);
prettyPrintArray($keys);