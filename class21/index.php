<?php
declare(strict_types=1);

// ob_start();
// include './partials/nav.php';
// $nav = ob_get_clean();
// $nav = str_replace('About', 'About Us', $nav);
// var_dump($nav);

/** Functions */
// foo(); // it will return 'hello from foo.php' even though it was defined after the call
// bar(); // you have to call foo first

// function foo(){
//     echo 'hello from foo.php' . '<br>';
//     function bar(){
//         echo 'Bar'. '<br>';
//     }
// }
// echo '<br>';
// // var_dump(foo2());

// if(true){
//     function foo2(){
//         return 'Hello from foo2.php';
//     }
// }
// var_dump(foo2());

// // but if it is in a condition it will generate an error even it is true
// function foo4(): mixed{ // void means it will not return anything but it will generate error if you return null
//     return [1.5];
// }
// var_dump(foo4());

// function foo(int|float &$x, int|float $y): int|float{
//     if($x % 2 == 0){
//         $x /= 2;
//     }
//     return $x * $y;
// }
// $a = 6.0;
// $b = 7;
// echo foo($a, $b). '<br>';
// var_dump($a, $b);
// // echo foo(5.0); // it will return 50 but if we use strict types it will return an error

// function sum(int|float $x, int|float $y, int|float ...$numbers): int|float{
//     return $x + $y + array_sum($numbers);
// }
// $a = 6.0;
// $b = 7;
// $numbers = [50, 60, 70];
// echo '<br>';
// echo sum($a, $b, ...$numbers). '<br>';


// // echo foo(y: $y, x: $x); // you can assign the value of the variable to the function parameter 
// // because if you mention the parameters in a different order that the argument it will generate an error
// setcookie (name:'foo', value: 'bar', httponly: true); // you can use the same name for the parameters
/* variable scopes */
// function foo($x){
//     echo $x;
// }

// foo($x);
//or
// function foo(){
//     $x = 5;
//     echo $x;
// }
// foo();

//or
// function foo(){
//     global $x;
//     echo $x;
// or echo $GLOBALS['x']; and you can event assign the value to the variable in the function
// }
// foo();

// $x = 5;

// include ('script1.php');

// echo '<br>';
// echo $x;
// static variables vs global variables
// static variables are variables that are only accessible within the function
// static variables are not accessible outside the function and they are not destroyed when the function ends while local variables are destroyed when the function ends
// function getValue(){
//     static $value = null;
//     if($value === null){
//         $value = someVeryExpensiveFunction();
//     }
//     // some more processing with $value
//     return $value;
// }

// function someVeryExpensiveFunction(){
//     sleep(2);
//     echo 'processing';
//     return 10;
// }

// echo getValue() . '<br>';
// echo getValue() . '<br>';
// echo getValue() . '<br>';

/* variable, anonymous and arrow functions */
// function sum(int|float ...$numbers): int|float{
//     return array_sum($numbers);
// }
// $x='sum';

// if (is_callable($x)){
//     echo $x(1, 2, 3, 4, 5);
// }else{
//     echo 'not callable';
// }

// $x = 1;
// // anonymous functions (closure)
// $sum = function(int|float ...$numbers)use(&$x): int|float{
//     $x = 15;
//     echo $x; // will cause an error you should use (use)
//     return array_sum($numbers);
// };
// echo $sum(1, 2, 3, 4, 5);
// echo '<br>' . $x;
// passing x by reference in the use statement will make it accessible outside the function and has the value that was assigned inside the function

// $array = [1, 2, 3, 4, 5];
// $array2=array_map(function($element){
//     return $element * 2;
// }, $array);

// //or $array2 = array_map($x, $array); and assign the function to $x, or $array2 = array_map('foo', $array); and name the function foo
// echo '<pre>';
// print_r($array);
// print_r($array2);
// echo '<pre>';


// $sum = function(callable $callback, int|float ...$numbers): int|float{
//     return $callback(array_sum($numbers));
// };

// echo $sum('foo',1,2,3,4,5);
// function foo($element){
//     return $element * 2;
// }
// closure must be in anonymous function but callable can be in a function

//arrow functions inline callbacks
//normal
// $array = [1, 2, 3, 4, 5];
// $array2=array_map(function($number){
//     return $number * $number;
// }, $array);
// echo '<pre>';
// print_r($array);
// print_r($array2);
// echo '<pre>';

//arrow // you don't need to use (use)
// $y = 5;
// $array = [1, 2, 3, 4, 5];
// $array2=array_map(fn($number)=>$number * $number * ++$y , $array);
// echo '<pre>';
// print_r($array);
// print_r($array2);
// echo '<pre>';
// echo $y;
// but if you do ++$y it change the value out of the function

/* Date and Time */
// $currentTime = time();
// echo $currentTime . '<br>';
// echo $currentTime + 5 * 24 * 60 * 60 . '<br>'; // 5 days
// echo $currentTime - 60 * 60 * 24 . '<br>'; // 1 day
// echo date_default_timezone_get() . '<br>';
// date_default_timezone_set('UTC');
// echo date('m/d/Y g:ai') . '<br>';
// echo date('m/d/Y g:ai', $currentTime + 5 * 24 * 60 * 60) . '<br>';
// echo date('m/d/Y g:ai', $currentTime - 60 * 60 * 24) . '<br>';

// echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br>';
// echo date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00')) . '<br>';
// echo date('m/d/Y g:ia', strtotime('tomorrow')) . '<br>';
// echo date('m/d/Y g:ia', strtotime('first day of february')) . '<br>';
// $date = date('m/d/Y g:ia', strtotime('first day of february'));
// echo '<pre>';
// print_r(date_parse_from_format('m/d/Y g:ia', $date));
// echo '<pre>';

require 'helpers.php';
// array_chunk()
// (array $array , int $size [, bool $preserve_keys = false])
$items = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
prettyPrintArray(array_chunk($items, 2, true));