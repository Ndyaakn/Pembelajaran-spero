<!-- Increment decrement
-PHP mendukung gaya bahasa pemograman C untuk menaikkan dan menurunkan data nu,ber sejumlah 1 angka 
-ini bisa mempersingkat kita ketika ingin menaikkan data 

Operator Increment dan decrement
$a++ (post increment) ->kembalikan $a lalu naikkan 1 angka 
++$a (pre increment) ->naikkan $a satu angka,  lalu kembalikan $a 
$a-- (post decrement) ->turunkan $a satu angka lalu kembalikan  $a   -->

<?php
$a = 10;
$a++;
$a++;

var_dump($a);

$b = ++$a;
var_dump($b);
