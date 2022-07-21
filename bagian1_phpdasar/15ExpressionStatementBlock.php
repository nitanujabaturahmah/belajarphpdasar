<?php
//Expression adalah apapun yang memiliki nilai atau value
$a = 5; //5 merupakan nilai expression

$b = $a; // a merupakan nilai expression yang memiliki nilai 5

//Expression Complex
function getValue()
{
    return 100;
}

$value = getValue(); //get value ialah expression karna bernilai 100

//Statement (kalimat lengkap dalam bahasa)
$name = "Maira Ainani Tazrian";

echo $name;

$date = new DateTime();

//Block kumpulan dari statement, yang di awali dan diakhiri dengan {}
function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}