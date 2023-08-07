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

// Code function di 

function greettings($nama) {
    echo "Halo " . ucfirst($nama).",Selamat Datang di jabar Coding Camp!";
}
echo "<br>";

// Hapus komentar untuk menjalankan code!
greettings("Bagas");
echo "<br>";
greettings("Wahyu");
echo "<br>";
greettings("Abdul");

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

       // Code Function Disini
    function reverseString($string) {
    $reversedString = '';
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    echo $reversedString . "<br>";
}


reverseString("abdul");
reverseString("Bootcamp");
reverseString("We Are JCC Developers");

echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/


// Code function di sini
function isPalindrome($string) {
    $length = strlen($string);
    $isPalindrome = true;

    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            $isPalindrome = false;
            break;
        }
    }

    return $isPalindrome;
}

function palindrome($string) {
    if (isPalindrome($string)) {
        echo "true ";
    } else {
        echo "false";
    }
}
palindrome("civic") ; // true
echo "<br>";
//palindrome("nababan") ; // true
palindrome("jambaban"); // false
//palindrome("racecar"); // true