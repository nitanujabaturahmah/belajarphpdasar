<?php

$name = "Maira";
$name = null;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name)); //cek variable isset
echo "\n";

$contoh = "Maira";
unset($contoh);

$contoh = "Maira";
$contoh = null;

var_dump(isset($contoh)); //cek variable nilai disarankan menggunakan isset
