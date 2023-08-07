<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Jabar Coding Camp!"
*/

// Code function di sini


// Hapus komentar untuk menjalankan code!
// greetings("Bagas");
// greetings("Wahyu");
// greetings("Abdul");

function greettings($nama) {
    echo "Halo " . ucfirst($nama).",Selamat Datang di jabar Coding Camp!";
}
greettings("Bagas");
echo "<br>";
greettings("Wahyu");
echo "<br>";
greettings("Abdul");


echo "<br>";