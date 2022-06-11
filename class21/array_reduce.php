<?php
require 'helpers.php';
// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed
$invoiceItems = [
    ['prince'=> 9.99, 'quantity'=> 2, 'description'=> 'T-Shirt'],
    ['prince'=> 12.99, 'quantity'=> 1, 'description'=> 'Socks'],
    ['prince'=> 14.99, 'quantity'=> 4, 'description'=> 'Hat'],
    ['prince'=> 19.99, 'quantity'=> 1, 'description'=> 'Shoes'],
];


// $total = array_reduce($invoiceItems, function($total, $item) {
//     return $total + $item['prince'] * $item['quantity'];
// }, 0);

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['prince'] * $item['quantity'],
);10;
echo $total;