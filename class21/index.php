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
function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
}
$x='sum';

if (is_callable($x)){
    echo $x(1, 2, 3, 4, 5);
}else{
    echo 'not callable';
}