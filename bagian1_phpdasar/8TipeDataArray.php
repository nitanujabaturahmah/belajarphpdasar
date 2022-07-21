<?php

$values = array(10, 8, 9, 7.5);
var_dump($values);

$names = ["Maira", "Ainani", "Tazrian"];
var_dump($names);

var_dump($names[0]); //ngambil data array

$names[0] = "Colphan"; //Mengubah data array
var_dump($names);

unset($names[1]); //Menghapus data array
var_dump($names);

$names[] = "Balamir"; //Menambah data array
var_dump($names);

var_dump(count($names)); //Menambah data array

//Array map
$sulaiman = array(
    "id" => "sulaiman",           //index 0
    "name" => "Sulaiman Bey",     //index 1
    "age" => 35,                //index 2
    //array dalam array
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia"
    )
);
var_dump($sulaiman);

var_dump($sulaiman["name"]);
var_dump($sulaiman["address"]["country"]); //mengambil array dalam array

$saltuk = [
    "id" => "saltuk",           //index 0
    "name" => "Saltuk Bey",     //index 1
    "age" => 35,                //index 2
    //array dalam array
    "address" => [
        "city" => "jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($saltuk);