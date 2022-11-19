<?php
/*array function 
contoh 
function                    keterangan 
array_keys()                mengambil semua keys milik array 
array_values()              mengambil semua values milik array 
array_map()                 mengubah semua data array dengan callback 
sort()                      mengurutkan array 
rsort()                     mengurutkan array terbalik 
shuffle()                   mengubah posisi data di array secara random */

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn (int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

$dataResult = array_map(fn (int $value) => $value * 1, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "eko",
    "last_name" => "kurniawan",
];
var_dump(array_keys($person));
var_dump(array_values($person));

