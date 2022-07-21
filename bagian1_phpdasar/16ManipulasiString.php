<?php

$name = "Maira Ainani Tazrian";

echo "Name : " . $name . PHP_EOL; //Menggabungkan data string dengan menggunakan dot (.)
echo "Value : " . 100 . PHP_EOL;

//Konversi ke Number dan Sebaliknya
$valuesString = (string)100;
var_dump($valuesString);

$valuesInt = (int)"100";
var_dump($valuesInt);

$valuesFloat = (float)"1.01";
var_dump($valuesFloat);

//Mengakses Karakter
$name = "Maira";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

//Variable Parsing
echo "Hello" . $name . ", Selamat Belajar PHP". PHP_EOL;
echo "Hello $name Selamat Belajar PHP". PHP_EOL;  //Hanya Mengambil data variable Disarankan

//Curly Brace
$var = "var";
echo "This is {$var}s". PHP_EOL;