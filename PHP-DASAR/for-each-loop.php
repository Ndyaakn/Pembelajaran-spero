<?php

// For each loop 
// -kadang kita biasa mengakses data array menggunakan perulangan
// -mengakses data array menggunakan perulangan sangat bertele tele, kita harus membuat counter, lalu 
//  mengakses array menggunakan counter yang kita buat 
//  -namun untungnya di php terdapat perulangan for each, yang bisa digunakan untuk mengakses selurh 
//  data di array secara otomatis 

 //kode tanpa for each 
//  $names = ["eko", "kurniawan", "edi"];
//  for ($i = 1; $i < count($names); $i++){
//     echo "Hello $names[$i]" .PHP_EOL;
//  }

 //menggunakan foreach 
//  $names = ["eko", "kurniawan", "edi"]; 
//  foreach ($names as $name) {
//     echo "Hello $name" .PHP_EOL;
//  }

$names = ["eko", "kurniawan", "edi"]; 
  foreach ($names as $index => $name) {
     echo "Hello $index = $name" .PHP_EOL;
  }

//  foreach untuk data berupa map

$person =[
    "first_name" => "Eko",
    "middle_name" => "Kurniawan", 
    "last_name" => "Kannedy", 
];

foreach ($person as $key => $value) {
    echo "$key : $value" .PHP_EOL;
}
