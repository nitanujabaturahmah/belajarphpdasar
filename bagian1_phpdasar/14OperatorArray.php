<?php

//data array pertama
$first = [
    "first_name" => "Maida"
];

//data array kedua
$last =[
    "first_name" => "Haura",
    "last_name" => "Rumaisa"
];

$full = $first + $last;
var_dump($full);

$a =[
    "first_name" => "Alya",
    "last_name" => "Honey"
];

$b =[
    "first_name" => "Honey",
    "last_name" => "Alya"
];

var_dump($a == $b);
var_dump($a === $b);