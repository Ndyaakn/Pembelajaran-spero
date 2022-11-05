<!-- Constant:
-Variable di PHP sifatnya mutable(bisa dirubah) 
-Jika ingin membuat variable immutable(tidak bisa di rubah), maka tidak bisa kita lakukan di PHP 
-Sebagai gantinya ada fitur Constant 
-Constant tempat utk menyimpan data yang tidak bisa di rubah lagi setelah dideklarasikan 
-Untuk membuat constant menggunakan function define() 
-Best practice pembuatan nama constan adalah menggunakan UPPER_CASE -->

<?php

define("AUTHOR", "programmer zaman now");
define("APP_VERSION", 100);

echo "AUTHOR : ";
echo AUTHOR;
echo "\n";

echo "App Version :";
echo APP_VERSION;
echo "\n";