<!-- Operator array 
-di php array memiliki operator khusus 
-mungkin terlihat mirip dengan operator operator sebelumnya, tapi cara kerjanya sedikit berbeda 


Operator array 
$a + $b (union) -> menggabungkan array $a dan $b 
$a == $b (equality) -> true jika $a dan $b memiliki key-value sama 
$a === $b (identity) -> true jika $a dan $b memiliki key-value sama dan posisi sama 
$a != $b (inequality) -> true jika $a dan $b tidak sama 
$a <> $b (inequality) -> true jika $a dan $b tidak sama 
$a !== $b (nonidentity) -> true jika $a dan $b tidak identik  -->


<?php
$first = [
    "first_name" => "Eko"

];

$last = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

$full = $first + $last;
var_dump($full); //operasi union

$a = [
    "first_name" => "Budi",
    "last_name" => "Cahyadi"
];

$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko"
];

var_dump($a === $b);
var_dump($a == $b);
var_dump($a !== $b);