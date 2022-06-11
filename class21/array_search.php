<?php
require 'helpers.php';
// array_search(mixed $needle, array $haystack, bool $strict = false): mixed or int|string|false
$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
$key = array_search('a', $array);
var_dump($key);
//case sensitive always, use strict comparision because however a is true when you do a == 'a' it will return false
if (array_search('A', $array, true)) {
    echo 'found';
} else {
    echo 'not found';
}
// or
if($key === false) {
    echo 'not found';
} else {
    echo 'found';
}
// another method called in_array 
if(in_array('a', $array)) {
    echo 'found';
} else {
    echo 'not found';
}