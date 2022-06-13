<?php
// working with filesystem
// $dir = scandir(__DIR__);
// var_dump($dir);
// var_dump(is_dir(__DIR__));
// // mkdir('foo/bar', recursive:true);
// // rmdir('foo');
// echo '</br>';
// if(file_exists('foo.txt')) {
//     echo filesize('foo.txt');
//     file_put_contents('foo.txt', 'Hello Hlbessa');
//     clearstatcache(); // clear the cache
// }else{
//     echo 'file not found';
// }
////////////////////////
// if(!file_exists('foo.txt')) {
//     echo 'file not found';
//     return;
// }else{
// $file = fopen('foo.txt', 'r'); // @fopen is (resource)  / r = read, w = write, a = append, x = create
// // var_dump($file);
// while(($line = fgets($file)) !== false) {
//     echo $line . '<br>';
// }
// }

// fclose($file);

// $file = fopen('foo.txt', 'r'); // @fopen is (resource)  / r = read, w = write, a = append, x = create
// // var_dump($file);
// while(($line = fgetcsv($file)) !== false) {
//     print_r($line);
// }
// }

// fclose($file);
////////////////////////////////////
// $content = file_get_contents('foo.txt', offset:3, length:2);
// echo $content;
// file_put_contents('bar.txt', 'hello');
// file_put_contents('bar.txt', 'world', FILE_APPEND);
// unlink('foo.txt');
// copy('foo.txt', 'bar.txt');
rename('foo.txt', 'bar.txt');