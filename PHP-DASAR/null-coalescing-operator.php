<?php
/*Null coalescing operator
-sebelumnya kita tahu bahwa data kosong dipresentasikan dengan data NULL di php 
-dan hal yang paling repot di php adalah mengecek apakah sebuah data ada atau tidak dan juga apakah data tersebut isinya null atau bukan 
-biasanya untuk melakukan itu kita perlu menggunakan pengecekan if statement dengan function isset($variable)
-namun untungnya di php ada null coalescing operator menggunakan tanda ?? */


$data = [
    "action" => "Create"
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}
echo $action .PHP_EOL;//tanpa null coalescing operator

$data = [];
$action = $data ['action'] ?? "Nothing";
echo $action .PHP_EOL;//dengan null coalescing operator