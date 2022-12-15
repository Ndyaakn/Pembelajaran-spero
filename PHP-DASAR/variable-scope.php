<?php
/* variable scope 
-di php kita bisa membuat variable dimanapun yang kita mau 
-scope variable adalah bagian dimana saja sebuah variable bisa diakses 
-php memiliki tiga jenis variable scope 
1. global 
2. local
3. static


1. global scope 
-variable yg dibuat diluar function memiliki scope global
-variable di scope global hanya bisa diakses dari luar function 
-artinya didalam function, kita tidak bisa mengakses variable di global scope
-cth: */
// $name = "eko";
// function sayName()
// {
//     echo $name; 
// }
// sayName();

/*2. local scope 
-variable yang dibuat didalam function memiliki scope local
-variable di scope local hanya bisa diakses dari dalam luar function itu sendiri 
-artinya variable tersebut tidak bisa diakses dari luar function ataupun function lain*/ 

// function createName(){
//     $name = "eko";
// }
// createName();
// echo $name;

/* global keyword 
-namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function,
kita bisa menggunakan kata kunci global
-dengan menggunakan kata kunci global, maka kita bis amengakses variable yang ada di global 
scope dari dalam function*/ 

$name = "eko";
function sayName()
{
    global $name;
    echo "hello $name" .PHP_EOL; 
}
sayName();


/* global variable 
-selain menggunakan global keyword, setiap variable yang di buat di global scope, secara otomatis 
akan disimpan di dalam array $GLOBAL oleh php
-JADI KITA BISA MENGGUNAKAN $global VARIABLE DENGAN KEY NAMA VARIABLENYA DARI DALAM FUNCTION JIKA 
INGIN MENakses global variable
-$GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun */

$name = "eko";

function sayYou()
{
    echo "heLlo {$GLOBALS['name']}" .PHP_EOL;
}
sayYou();

/*static scope 
-secara default local variable itu siklus hidupnya hanya sebatas functionnya dieksekusi 
-jika sebuah function selesai dieksekusi , maka siklus hidupnya tidak akan berhenti ketika 
sebuah function selesai dieksekusi 
-artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki 
value dari sebelumnya */

function increment()
{
    static $counter = 1; //static scope
    echo "counter = $counter" .PHP_EOL;

    $counter++;
} 

increment();
increment();
increment();