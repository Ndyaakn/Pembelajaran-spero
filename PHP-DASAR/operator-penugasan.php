<!-- Operator penugasan
-sama seperti bahasa pemograman lain, yaitu dengan menggunakan karakter = (sama dengan)
-biasanya digunakan untuk mengubah/emberi value pada sebuah variable
-operasi penugasan juga bisa di gunakan untuk operasi aritmatika

Penugasan 
$a += $b -> ($a = $a + $b) 
$a -= $b -> ($a = $a - $b)
$a *= $b -> ($a = $a*$b)
$a /= $b -> ($a = $a/$b)
$a %= $b -> ($a = $a%$b) -->

<?php
$total = 0;
$ayam = 10000;
$jus = 5000;
$buah = 40000;

$total= $total + $buah;
$total= $total + $ayam;
$total= $total + $jus;

var_dump($total);
