<?php
/* php.ini & configuration */
// ini_get();
//     ini_set();

// error_reporting, error_log, display_errors
// var_dump(ini_get('error_reporting'));
// var_dump(E_ALL);
// ini_set('error_reporting', E_ALL & ~E_WARNING);
// ini_set('display_errors', 0);
// var_dump(ini_get('display_errors'));

// ini_set('max_execution_time', 3);
// sleep(5);
// // $array = [1];
// // echo $array[3];
// echo 'Hello World';
/////////////////
// var_dump(ini_get('memory_limit'));
// $string = 'X';

// for($i = 0; $i < 1000000; $i++) {
//     $string .= $string;
// }
// echo $string;
///////////////////
// error_reporting(E_ALL); // or E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED and so on 
// trigger_error('This is a warning', E_USER_WARNING);
// echo 1;
///////////////////
// you don't wanna expose your code to the world, so you can use this to hide the error
// function errorHandler(int $type, string $msg, ?string $file =null
// ,?int $line = null){
//     echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;
//     exit;
// }
// error_reporting(E_ALL & ~E_WARNING);
// set_error_handler('errorHandler', E_ALL);
// echo $x;
//////////////////////////
// APACHE CONFIGURATION
// /usr/local/apache2/conf
// /var/log/httpd
