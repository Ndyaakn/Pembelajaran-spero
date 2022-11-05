<!-- DATA NULL 
-Nilai Null merepresentasikan sebuah variable tanpa nilai 
-Saat ingin membuat variable, lalu ingin menghapus data yg terdapat di variable tersebut, bisa menggunakan null utk mengosongkan variable tersebut 
-Utk membuat data null, bisa menggunakan kata kunci NULL(case insensitive)
 -->

 <?php

 $name = "eko";
 $name = null;

 $age =null;
 echo $name;
 echo $age;

//  Mengecek apakah data null 
//  -utk mengecek apakah sebuah data bernilai null bisa menggunakan function is_null($variable) 

 echo is_null($name);  

 var_dump(is_null($name)); //return berupa boolean cth 1.


//  Menghapus variable
//  -Selain mengubah data menjadi null, di php juga bisa menghapus sebuah variable, caranya dengan menggunakan function unset($variable) 
//  -Namun hati hati, ketika variable di hapus, tidak bisa lagi mengakses variable tersebut,
//  -Agar lebih amabn, bisa menggunakan function isset($variable) utk mengecek aakah sebuah variable ada nilainya atau tidak null; 

$contoh = "eko";
unset($contoh);

var_dump(isset($contoh));