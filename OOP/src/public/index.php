<?php
declare(strict_types=1);

require_once '../Transaction.php';

// Classes & Objects
// $transaction = new Transaction(100, 'Payment for something');
// $transaction->addTax(8);
// $transaction->applyDiscount(10);

// $transaction->amount = 15;

$transaction = (new Transaction(100, 'Payment for something'))
->addTax(8)
->applyDiscount(10);
$amount = $transaction->getAmount();
unset($transaction); // this will destroy the object and print 'Transaction object destroyed' (destructor)
// $transaction = null; // this will destroy the object and print 'Transaction object destroyed' (destructor)
// exit; // this will call the destructor but the script will stop
var_dump($amount); // if you var_dump the object $transaction->amount, you will get the value of the constructor. then the destructor will be called.
// but if you call $amount and keep the getAmount() method,the destructor will not be called before the constructor because the object is not destroyed yet (no reference to the object).
// var_dump($transaction->getAmount());
// var_dump($transaction); // unintialized object

$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str, true);
var_dump($arr);
echo '<br>';

$obj = new \stdClass();
$obj->a = 1;
$obj->b = 2;
$obj->c = 3;
var_dump($obj);
echo '<br>';

// casting
$arr = [1, 2, 3];
// var_dump((object)$arr);
$obj = (object)$arr;
var_dump($obj->{1});
echo '<br>';

// scalar
$obj = (object) false; // this means $obj->value = false
var_dump($obj->scalar);
echo '<br>';

$obj = (object) null; // this means $obj->value = null
var_dump($obj);
echo '<br>';