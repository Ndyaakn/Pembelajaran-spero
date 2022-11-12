<!-- Manupulasi string 
1. Dot operator
-dot(titik) operator adalah operator yg bisa digunakan utk menambah string dengan data lain (bisa string atau  tipe data lainnya)
-sebenarnya bisa menggunakan + (plus) untuk menambah string namun jika kita coba tambahkan string dengan tipe data number maka akan 
terjadi eror oleh karena itu direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain 
Kode dot ooperator  -->
<?php
$name = "eko kurniawan";

echo "Nama : " . $name . PHP_EOL;//PHP_EOL(karakter enter constant bawaan php)
echo "Nilai : " . 100 . "\n";

// Konversi ke number dan sebaliknya 
// -kadang kita sering melakukan konversi tipe data dari string ke number (int/float) atau sebaliknya 
// -di php utk melakukan konversi cukup mudah kita hnya perlu  menggunakan tanda kurung (tipe data)
// - Tipe data utk string adalah string, untuk number bisa menggunakkan int atau integer dan float untuk floating point 

// Konversi ke number dan sebaliknya 
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);
 
// Mengakses karakter 
// -string di php seerti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku 
// -sama seperti di array, index pertama di mulai dari 0
// -jika kita mengakses index melibihi karakter string maka akan terjadi eror

// Kode: mengakses karakter

$name = "eko";
echo $name[0].PHP_EOL;
echo $name[1].PHP_EOL;
echo $name[2].PHP_EOL;
echo $name[3].PHP_EOL;

// Variable parsing 
// -khusus string menggunakan double quote atau heredoc kita bisa menggunakan karakter 4 untuk mengakses variable 
// -ini mempermudah ketika kita ingin menggabungkan string dengan variable 
// -cara penggunaannya adalah dengan menggunakan karakter 4 LALU DIIKUTI DENGAN NAMA VARIABLENYA

// Kode : Variable parsing 

$name ="Eko";
echo "Hello" . $name . "Selamat belajar" . PHP_EOL;
echo "Hello $name, Selamat belajar" . PHP_EOL;

// Curly Brace 
// -kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing 
// -untungkan di php kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing 
// Kode: curly brace

$var = "var";
echo "This is {$var}s" . PHP_EOL;

