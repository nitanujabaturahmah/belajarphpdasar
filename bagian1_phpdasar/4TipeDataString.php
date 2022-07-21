<?php

//single Quote (petik satu)
echo 'Nama : ';
echo 'Maira Ainani Tazrian';

//Double Quote (Petik dua)
//bisa menggunakan escape sequence seperti \n"untuk ENTER", \t"Untuk TAB" DLL
echo 'Nama : ';
echo 'Maira Ainani Tazrian';
echo "\n";

echo "Nama : ";
echo "Maira\t Ainani\t Tazrian\n";

//Multiline String "Heredoc"
echo <<<MAI
    Selamat Belajar PHP 
    Sekarang, Kita Belajar type data String
    Ini adalah cara ke-3 membuat string 
    bisa menggunakan "heredoc" 
    MAI;

//Nowdoc
echo <<<'MAI'
    Ini adalah contoh string yang sangat 
    panjang, dan juga gak perlu ngetik ENTER secara 
    manual, "bisa quete" juga
    MAI;