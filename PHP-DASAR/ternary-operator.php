<?php
/*Ternary Operator
-kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika
benar kita ingin memberi nilai terhadap variable dengan nilai x dab jika salah dengan nilai Y 
-penggunaan if statement pada kasus seperti bisa di persingkat dengan mengunakan ternary operation 
-ternary operator menngunakan katakunci ? dan : */


$gender = "PRIA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "Hi bro";
} else {
    $hi = "Hi nona";
}

echo $hi .PHP_EOL;

$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";

echo $hi .PHP_EOL;