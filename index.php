<?php declare(strict_types=1); ?>
<?php

echo print "Hello World!"; // returns value of 1
echo "Hello World!";
echo 'Hello', ' ' ,'World!'; 
echo 'hlbessa\'s name'; // or
echo "hlbessa's name";
$name = 'hlbessa';
echo "My name is $name";
// variable can't start with a number or a symbol except underscore (_)
// variable can't contain spaces or special characters except underscore (_)
// can't use this variable in a string
$x = 1;
$y = &$x; // $y is a reference to $x
$x = 2;
echo $y; // 2
// ========================
$firstName = 'hlbessa';
echo "My name is {$firstName}"; // My name is hlbessa
echo 'hello'.$firstName; // hello hlbessa
?>
// ========================
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Hello World'?></h1>
    <?php
        $name = 'hlbessa';
        echo "My name is {$name}";
        $x = 10;
        $y = 20;
        echo '<h2>'.$x.','. $y.'</h2>';
        $firstName = 'hlbessa';
        $firstName = 'Hambozo';
        echo "My name is {$firstName}";
        define('STATUS_PAID', 'paid');
        echo defined('STATUS_PAID'); // 1
        echo STATUS_PAID;
        const STATUS_UNPAID = 'unpaid';
        echo defined('STATUS_UNPAID'); // 1
        echo STATUS_UNPAID;
        $paid = 'PAID';
        define('STATUS_'. $paid, 4);
        echo '</br>';
        echo STATUS_PAID; // 4
        echo PHP_VERSION; // 8.1.5
        echo __LINE__; // 52
        echo __FILE__; // C:\xampp\htdocs\php\index.php
        echo '</br>';
        $foo = 'bar';
        $$foo = 'baz';
        //same as $bar = 'baz';
        echo $foo, $bar; // barbaz
        echo "$foo", ${$foo}; // barbaz
        /* Data Types & Type Casting */
        #4 Scalar Types
        // string
        $name = 'hlbessa';
        // integer
        $age = 20;
        // float (decimal)
        $height = 1.8;
        // boolean (true/false)
        $is_married = false;

        # 4 Compound Types
        // array (associative array)
        $array = array(1,2,3,4,5);
        $companies = array('Google', 'Facebook', 'Microsoft');
        // same as $companies = ['Google', 'Facebook', 'Microsoft'];
        print_r($companies);
        // object (class)
        $object = new stdClass();
        // callable (function or method)
        $callable = function(){
            echo 'Hello World';
        };
        // iterable (array, object, string)
        $iterable = new ArrayIterator(array(1,2,3,4,5)); // ArrayIterator
        
        # 2 Special Types
        // resource (file, database connection, etc)
        $resource = fopen('index.php', 'r');
        // null (empty)
        $null = null;
        
        echo gettype($name); // string
        var_dump($name); // string(6) "hlbessa"
        echo '</br>';
        function sum(float $x, float $y){
            return $x + $y;
        }
        echo sum(1,2); // 3
        var_dump(sum(1,2)); // int(3) but we declared it as float so it will be float cause of the type hinting
        echo '</br>';
        //Type Coercion (automatic type conversion)
        $x = '1';
        $y = 2;
        echo $x + $y; // 3
        var_dump($x + $y); // int(4)
        $x = (int)'1';
        var_dump($x); // int(1)
        /* Boolean */
        $isComplete = true;
        if($isComplete){
            echo 'Complete';
        }else{
            echo 'Incomplete';
        } // Complete
        echo '</br>';

        /* Booleans */
        // integers 0 -0 = false
        // integers 1 -1 = true
        // floats 0.0 -0.0 = false
        // floats 1.0 -1.0 = true
        // strings '' = false
        // strings ' ' = true
        // null - null = false
        // '0' = false
        // [] = false
        // null = false
        var_dump(is_bool($isComplete));


        /* integers */
        $x = 05;
        $x = PHP_INT_MAX + 1;
        $x = (int) null; // 0
        $x = 2_000_000_000;
        var_dump(is_int($x));

        /* floats */
        $x = 1.234;
        $x = 0.0;
        $x = 4.56e3-3;
        $x = floor((0.1 + 0.7) * 10);
        var_dump(is_float($x));

        echo $x; // 4.56
        // echo PHP_FLOAT_MAX; // 1.8e+308

        /* Floats */
        echo '</br>';
        $x = ceil((0.1 + 0.7) * 10); // 5
        $x = 0.23;
        $y = 1- 0.77;
        var_dump($x, $y);
        if($x === $y){
            echo 'true';
        }else{
            echo 'false';
        } // false in old version of php but true in new version of php
        echo '</br>';
        echo log(-1); // log(-1) = NaN
        echo PHP_FLOAT_MAX*2; // INF inifinite number of floating point numbers (1.8e+308)
        echo '</br>';
        // casting
        $x = '5adsa';
        var_dump((float)$x); // float(5)

        /* strings */
        $firstName = 'Hlbessa';
        $lastName = 'Hambozo';
        $fullName = $firstName . ' ' . $lastName;
        echo $fullName; // Hlbessa Hambozo
        echo '</br>';
        // to access the l index of the string
        echo $fullName[1]; // H
        echo '</br>';
        // change l index of the string
        $fullName[1] = 'B';
        echo $fullName; // HBbessa Bambozo
        echo '</br>';
        $fullName[17] = 'Z';
        var_dump($fullName); // string(18) "Hlbessa Bambozo Z"
        echo '</br>';
        // Heredoc and Nowdoc (heredoc is for strings and nowdoc is for variables)
        $fullName = <<<EOT
        $firstName
        $lastName
EOT;
        echo $fullName; // Hlbessa Bambozo
        echo '</br>';
        // Concatenation (.) Nowdoc
        $fullName = <<<'EOT'
        $firstName
        $lastName
EOT;
        echo $fullName; // Hlbessa Bambozo
        echo '</br>';

        /* Null */
        $x = null;
        var_dump($x); // NULL
        echo '</br>';
        echo $x; // null (empty)
        var_dump(is_null($x)); // true
        echo '</br>';
        var_dump($x === null); // true
        // and if $x isn't defined then it will be null
        echo '</br>';
        $x = 123;
        var_dump($x); // 123
        unset($x);
        var_dump($x); // NULL
        echo '</br>';
        $x = null;
        var_dump((string)$x); // ''
        echo '</br>';
        
        /* Arrays */
        // $programmingLanguages = array('PHP', 'JavaScript', 'Python', 'Java');
        $programmingLanguages = ['PHP', 'JavaScript', 'Python', 'Java'];
        var_dump($programmingLanguages); // array(4) { [0] => string(3) "PHP" [1] => string(8) "JavaScript" [2] => string(4) "Python" [3] => string(3) "Java" }
        echo '</br>';
        echo $programmingLanguages[0];
        echo '</br>';
        echo $programmingLanguages[-1]; // undifined index not like string index
        echo '</br>';
        // check if the item exists
        var_dump(isset($programmingLanguages[3])); // true
        echo '</br>';
        // change the value of the item
        $programmingLanguages[3] = 'C++';
        echo $programmingLanguages[3]; // C++
        echo '</br>';
        print_r($programmingLanguages); // array(4) { [0] => string(3) "PHP" [1] => string(8) "JavaScript" [2] => string(4) "Python" [3] => string(3) "C++" }
        echo '</br>';
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';

        echo '</br>';
        echo count($programmingLanguages); // 4
        echo '</br>';
        // add an item to the end of the array
        // $programmingLanguages[] = 'C#';
        // echo '<pre>';
        // print_r($programmingLanguages);
        // echo '</pre>';
        // echo '</br>';
        
        array_push($programmingLanguages, 'C', 'C++', 'C#');
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';
        echo '</br>';
        // remove an item from the end of the array
        array_pop($programmingLanguages);
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';
        echo '</br>';
        // remove an item from the beginning of the array
        array_shift($programmingLanguages);
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';
        echo '</br>';

        // define keys and values in an array
        $programmingLanguages = [
            'PHP' => '8.1.5',
            'JavaScript' => 'JavaScript',
            'Python' => '3.10.5',
            'Java' => 'Java',
        ];
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';
        echo '</br>';
        // get the value of a key
        echo $programmingLanguages['PHP']; // PHP Hypertext Preprocessor
        echo '</br>';
        // get the key of a value
        echo array_search('JavaScript', $programmingLanguages); // JavaScript
        $newLanguage = 'Ruby';
        $programmingLanguages[$newLanguage] = 'Ruby';
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';
        echo '</br>';
        $programmingLanguages = [
            'PHP' => [
                'versions' => [
                    ['version' => '8.1.5',
                    'releaseDate' => '2020-01-01',]
                ],
                'website' => 'http://php.net',
            ]
            ];
        echo '<pre>';
        print_r($programmingLanguages);
        echo '</pre>';
        echo '</br>';
        echo $programmingLanguages['PHP']['versions'][0]['releaseDate']; // 8.1.5
//overwrite the value of a key
            $array = [true => 'foo', false => 'bar'];
            $array[true] = 'baz';
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            echo '</br>';
            $array = ['a' => 'apple', 'b' => 'banana'];
            $array['a'] = 'orange';
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            echo '</br>';
            
            $array = ['a' => 1, 'b' => 2, 'c' => null];
            var_dump((array_key_exists('c', $array))); // true
            echo '</br>';
            var_dump(isset($array['c'])); // false
            echo '</br>';

            // Expressions
            $x = 1;
            $y = $x;
            $z = $x === $y;
            echo $z; // true (1)
            if($x < 5)
            {echo 'hello';}
            echo '</br>';
            
            /* OPERATORS */
            // Arithmetic Operators ( + - * / % ** )
            $x = 1;
            $y = 2;
            var_dump($x ** $y); // int(1)
            echo '</br>';
            var_dump($x + $y); // int(3)
            echo '</br>';
            var_dump($x - $y); // int(-1)
            echo '</br>';
            var_dump($x * $y); // int(2)
            echo '</br>';
            var_dump($x / $y); // float(0.5)
            // if $y = 0 then it will throw an error so we use fdiv it will return a INF //var_dump(fdiv($x, $y)); 
            echo '</br>';
            var_dump($x % $y); //int(1) x = 1, y = 2, x % y = 1
            echo '</br>';
            $x = 10.5;
            $y = 2.9;
            var_dump($x % $y); // int(0) x = 10.5, y = 2.9, x % y = 0
            echo '</br>';
            var_dump(fmod($x, $y)); // float(1.8) x = 10.5, y = 2.9, fmod(x, y) = 1.8
            echo '</br>';
            $x = -10;
            $y = 3;
            var_dump($x % $y); // int(-2) x = -10, y = 2, x % y = -2
            echo '</br>';
            $x = ($y = 10);
            // Assignment Operators ( = + = - = * = % = ** = )
            $x += 3;
            echo $x; // 13
            echo '</br>';
            // String Operators ( .. = )
            $x = 'Hello';
            $y = 'World';
            $z = $x . $y;
            echo $z; // HelloWorld
            echo '</br>';
            var_dump($x == $y); // false difference between == and === 
            // is that == will check if the value is the same but === will check if the value and type are the same
            echo '</br>';
            // Comparison Operators ( = === =/= <> < > <= >= ?? ?: )
            $x = 'Hello World';
            $y = strpos($x, 'H');
            $result = $y === false ? 'Not found' : 'Found at position ' . $y;
            echo $result; // Found at position 0
            echo '</br>';
            if ($y === false){
                echo 'The string was not found';
            } else {
                echo 'The string was found at position ' . $y;
            }
            echo '</br>';
            $x = null;
            $y = $x ?? 'hello';
            echo $y; // hello
            echo '</br>';
            // Error Control Operators ( @ )
            // $x = @file('foo.txt'); // not recommended to use @

            // Increment / Decrement Operators ( + , - )
            $x = 5;
            $y = $x++;
            echo $y; // 5
            echo '</br>';
            echo $x; // 6
            echo '</br>';
            $x = 5;
            $y = ++$x;
            echo $y; // 6
            echo '</br>';
            $x = 'abc';
            echo ++$x; // d
            echo '</br>';
            // Logical Operators ( && || ! and or xor )
            $x = true;
            $y = false;
            var_dump($x && $y); // false
            echo '</br>';
            var_dump($x || $y); // true
            echo '</br>';
            var_dump(!$x || $y); // false
            echo '</br>';
            // and vs && 
            $x = true;
            $y = false;
            $z = $x and $y;
            var_dump($z); // true
            echo '</br>';
            // Bitwise Operators ( & | ^ ~ <<< >> )
            $x = 6;
            $y = 3;
            var_dump($x & $y); // int(2)
            echo '</br>';
            // 110
            // &
            // 011
            // --------
            // 010 = 2
            var_dump($x | $y); // int(7)
            echo '</br>';
            // 110
            // |
            // 011
            // --------
            // 111 = 7
            var_dump($x ^ $y); // int(5)
            echo '</br>';
            // 110
            // ^
            // 011
            // --------
            // 101 = 5
            var_dump(~$x & $y); // int(1)
            echo '</br>';
            // 110
            // ~
            // 001
            // &
            // 011
            // --------
            // 001 = 1
            echo '</br>';
            $x = 6; 
            $y = 3;
            var_dump($x << $y); // int(48)
            echo '</br>';
            // 110
            // <<<
            // 110000 = 48
            var_dump($x >> $y); // int(0)
            echo '</br>';
            // 110
            // >>>
            // 0 = 0
            echo '</br>';
            
            // Array Operators ( + == # 0 = )
            $x = ['a' => 1, 'b' => 2, 'c' => 3];
            $y = ['d'=> 4, 'e' => 5, 'f' => 6];
            $z = $x + $y;
            print_r($z); // Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 [e] => 5 [f] => 6 )
            echo '</br>';
            $x = ['a' => 1, 'b' => 2, 'c' => 3];
            $y = ['d'=> 4, 'e' => 5, 'f' => 6];
            $z = $x == $y;
            var_dump($z); // false it will be true if the keys and values are the same
            // === will check if the value and type are the same and will check if the keys are the same too
            echo '</br>';

            // Execution Operators ( ` ` )
            // Type Operators ( instanceof )
            // Nullsafe Operator PHP8 ( ? )

            /* Operator Precedence & Associativity */
            // https://www.php.net/manual/en/language.operators.precedence.php
            $x = (5 + 3) * 5;
            echo $x; // 40
            echo '</br>';
            $x = 5;
            $y = 2;
            $z = 10;
            $result = $x / $y * $z;
            echo $result; // 25
            echo '</br>';
            $x = true;
            $y = false;
            $z = true;
            var_dump($x && $y || $z); // true

            /* control structures (if / else / elseif / else if) */
            ?>
            <?php 
            $score = rand(0, 100); ?>
            <?php if ($score >= 90): ?>
                <strong style="color: green;">You got an A!</strong>
            <?php elseif ($score >= 80): ?>
                <strong>You got a B!</strong>
            <?php elseif ($score >= 70): ?>
                <strong>You got a C!</strong>
            <?php elseif ($score >= 60): ?>
                <strong>You got a D!</strong>
            <?php else: ?>
                <strong>You got an F!</strong>
            <?php endif; ?>

            <?php
            // echo '</br>';
            // /* LOOPS */
            // // while
            // $i = 0;
            // while ($i < 10) {
            //     echo $i;
            //     $i++;
            // }
            // echo '</br>';
            // // do while
            // $i = 0;
            // do {
            //     echo $i;
            //     $i++;
            // } while ($i < 10);
            // echo '</br>';
            // // for
            // for ($i = 0; $i < 10; $i++) {
            //     echo $i;
            // }
            // echo '</br>';
            // // foreach
            // $colors = ['red', 'green', 'blue'];
            // foreach ($colors as $color) {
            //     echo $color;
            // }
            // echo '</br>';
            // // foreach with key
            // $colors = ['red' => '#f00', 'green' => '#0f0', 'blue' => '#00f'];
            // foreach ($colors as $key => $value) {
            //     echo $key . ': ' . $value;
            // }
            // echo '</br>';
            // //while
            // $i = 0;
            // while ($i < 10) {
            //     if ($i == 5) {
            //         break;
            //     }
            //     echo $i;
            //     $i++;
            // }
            // echo '</br>';
            
            // while($i <= 15){
            //     if($i % 2 == 0){
            //         echo $i;
            //     }
            // }
            // echo '</br>';
            // // continue
            // $i = 0;
            // while ($i < 10) {
            //     $i++;
            //     if ($i == 5) {
            //         continue;
            //     }
            //     echo $i;
            // }
            // echo '</br>';
            // // break
            // $i = 0;
            // while ($i < 10) {
            //     $i++;
            //     if ($i == 5) {
            //         break;
            //     }
            //     echo $i;
            // }
            // echo '</br>';

            // //for
            // $text = ['a', 'b', 'c', 'd', 'e'];
            // for ($i = 0; $i < count($text); $i++) {
            //     echo $text[$i];
            // }
            echo '</br>';
            $programmingLanguages = ['PHP', 'JavaScript', 'Python', 'Ruby'];
            foreach ($programmingLanguages as $key => $language) {
                echo $key .': '. $language.'<br>';
            }
            echo $language;
            echo '</br>';

            $user = [
                'name' => 'Hlbessa',
                'age' => '25',
                'email' => 'hlbessa@gmail.com',
                'skills' => ['PHP', 'JavaScript', 'Python', 'Ruby']
            ];
            foreach ($user as $key => $value):
                echo $key . ': ';
                if(is_array($value))
                foreach($value as $skill){
                    echo $skill . '<br>';
                }
                else{
                    echo $value . '<br>';
                }
            endforeach;
            echo '</br>';
?>
            <?php
            $paymentStatus = 'paid';
            switch($paymentStatus)
            {
                case 'paid':
                    continue 1;
                    echo 'Payment was successful';
                    // break;
                case 'pending':
                    echo 'Payment is pending';
                    break;
                case 'failed':
                    echo 'Payment failed';
                    break;
                default:
                    echo 'Unknown payment status';
                    break;
            }
            echo '</br>';
             /* FUNCTIONS */
            function x(){
                sleep(3);
                echo 'Hello World <br>';
                return 3;
            }
            switch(x())
            {
                case 1:
                    echo '1';
                    break;
                case 2:
                    echo '2';
                    break;
                case 3:
                    echo '3';
                    break;
                default:
                    echo 'default';
                    break;
            }
            echo '</br>';
            
            $paymentStatusDisplay = match($paymentStatus)
            {
                1=>print'paid',
                2=>print'pending',
                3=>print'failed',
                default=>print'unknown'

            };
            echo $paymentStatusDisplay;
            // strickt comparison (match) and loose comparison (switch)
            // switch vs match (match is faster) but switch case can have more statments, match has to have default case switch doesn't https://www.php.net/manual/en/function.match.php
            // https://www.php.net/manual/en/function.switch.php
            echo '</br>';
            /** return / declare / goto */
            function sum2(int $x, int $y){
                $z = $x + $y;
                return $z;
            }
            $x = sum2(5, 10);
            echo $x;
            // return;
            echo '</br>';
            echo 'Hello World'; // this will not be executed
            echo '</br>';
            // declare - ticks
            $x = 3;
            $y = 5;
            $z = $x * $y;

            // function onTick(){
            //     echo 'Trick<br>';
            // }

            // $i = 0;
            // $length = 10;
            // while($i < $length){
            //     $i++;
            //     onTick();
            // }
            // register_tick_function('onTick');
            // declare(ticks=1)

            declare(strict_type=1);
            function hlbessa(int $x, int $y){
                return $x + $y;
            }
            /** require / require_once / include / include_once */

            require 'foo.php';
            echo '</br>';
            require_once 'foo.php';
            echo '</br>';
            include 'foo.php';
            echo '</br>';
            include_once 'foo.php';
            echo '</br>';
            
?>
</body>
</html>
