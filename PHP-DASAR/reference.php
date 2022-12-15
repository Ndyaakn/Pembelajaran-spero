<?php
/*Reference 
adalah mengakses variable yg sama dengan nama variable yang berbeda
-reference di phpp tidak sama dengan reference di bahasa pemograman seperti c/c++ 
yg memiliki fitur pointer
-analogi reference itu seperti file, jika variable adlaah file, dan valuenya adalah 
isi filenya, maka reference adalah membuat shortcut (di windows) atau alias (di linux/mac) 
terhadap file yang sama
-saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah 
-untuk membuat reference terhadap variable, kita bisa menggunakan karakter &


Assign by reference 
-pertama, php reference bisa memungkinkan kita bisa membuat beberapa variable menuju 
ke value yang sama*/

$name = "eko";
$otherName = &$name;
$otherName = "budi";

echo $name .PHP_EOL;

/* pass by reference 
-selanjutnya yg bisa dilakukan di php adalah mengirim data ke function dengan reference */

function increment(int &$value)
{
    $value++;
}

$counter = 10;
increment($counter);

echo $counter .PHP_EOL;

/*returning references
-php juga bisa mengembalikan reference pada function 
-namun hati hati, gunakan fitur ini jika memang ada alasannya karena fitur ini bisa 
membingungkan */

function &getValue()
{
    static $value = 100;
    static $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;




