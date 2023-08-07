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