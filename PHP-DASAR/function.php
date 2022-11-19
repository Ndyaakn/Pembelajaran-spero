<?php
// Function 
// -adalah blok kode program yang akan berjalan saat kita panggil 
// -untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan 
// nama function, kurung() dan diakhiri dengan blok 
// -kita bisa memanggil function dengan mengggunakan nama function lalu diikuti dengan kurung ()
// -di bahasa pemograman lain function juga disebut dengan method 

// Kode :

// function sayHello()
// {
//     echo "Hello function" .PHP_EOL;
// }

// sayHello();

// Lokasi function 
// -PHP sgt flexible dalam pembuatan function 
// -function dapat dibuat dalam if statement, function dan sebagainya 
// -namum jika kode function yg belum dieksekusi oleh php maka function tersebut tidak bisa digunakan

$buat = true;

if($buat) {
    function sayHello()
    {
        echo "Hello function" .PHP_EOL;
    }
}

sayHello();
