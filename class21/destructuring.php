<?php
require 'helpers.php';
$array = [1, 2, 3, 4, 5];
[$a, $b, $c, $d, $e] = $array; // or list($a, $b, $c, $d, $e) = $array;
echo $a . ' ' . $b . ' ' . $c . ' ' . $d . ' ' . $e;
// you can specify the number of elements you want to unpack, destruct
