<!-- TIPE DATA ARRAY
-array ialah tipe data yang berisikan kosong atau banyak data 
-array di php bisa berisikan data dgn jenis yg berbeda beda 
-array di php memiliki panjang dinamis, artinya bisa menambah data ke array sebanyak banyaknya tidak di batasi kapasitasnya 
  -->

  <!-- Cara kerja array
  -first index ada di angka 0
  -Jika array kita sebanyak 10 data, maka element ada pada data 8, dan indices pada data 9. -->

  <?php

  $values = array(10, 80, 90, 100);
  var_dump($values);

  $name = ["eko", "kurniawan"];
  var_dump($name);

//   Operasi array
//   $array[index] => mengakses data di array pada nomor index
//   $array[index] = value => mengubah data di array pada nomor index dengan value baru
//   $array[]=value =>menambah data di array pada posisi paling belakang
//   unset($array[index]) =>menghapus data di array, index otomatis hilang dari array
//   count($array) =>mengambil total data di array


 $names = ["eko", "kurniawan"];
 var_dump($names[1]);

 unset($names[0]);
var_dump($names);
var_dump(count($names));

// Array sebagai MAP 
// -biasanya di kebanyakan bahasa programan, terdapat tipe data bernama MAP, yaitu asosiasi antara key dan value 
// -namun di php map bisa dibuat menggunakan array 
// -secara default array akan menggunakan index(number) sebagai key dan valuenya kita bisa bebas masukan data ke dalam array 
// -namun jika ingin, juga bisa mengubah indexnya tidak harus menggunakan number bisa gunakan tipe data lain misalnya seperti string 
// -hal tersebut terlihat seperti map di bahasa pemograman lain.

$eko = array (
    "id" => "eko",
    "age" => 30,
    "address" =>array(
        "city" => "jakarta",
        "country" => "indonesia",
    )
);
var_dump($eko);
var_dump($eko["age"]);
var_dump($eko["address"]["country"]);


// Array di dalam array 
// -array di php bisa berisikan data apapun 
// -sehingga juga bisamembuat array di dalam array jika memang di butuhkan
