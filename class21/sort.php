<?php
require 'helpers.php';
$array = ['d' => 6, 'f' => 2, 'g' => 7, 'a' => 5, 'b' => 10];
prettyPrintArray($array);
asort($array); // sort by value
prettyPrintArray($array);
ksort($array); // sort by key
prettyPrintArray($array);
usort($array, fn($a, $b) => $a <=> $b); // custom callback function (sort numerically) and you can reverse the order by changing the a <=> b to b <=> a