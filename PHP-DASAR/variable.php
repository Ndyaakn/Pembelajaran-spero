<!-- Variable 
-tempat menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
-Di php variable bisa menampung berbagai jenis tipe data dan bisa berubah-bah tipe data 
-Untuk membuat variable kita bisa mengguanakn tanda $(dolar) diikuti dengan nama variablenya 
-penamaan variable tidak boleh mengandung spasi  -->

<?php
$name = "Eko";
$age = 30;

echo $name;
echo "\n";
echo $age;

// Variable Variables
// -Php memiliki kemampuan variable variables, yaitu membuat variable dari string value variable 
// -Disarankan tdk menggunakan fitur ini kecuali memang di perlukan
// -Untuk membuat variable dari value variable menggunakan $$ 

$name= "eko";
$$name = "keren";

echo " Nama = ";
echo $name;
echo "\n"; 

echo " eko = ";
echo $eko;
echo "\n";