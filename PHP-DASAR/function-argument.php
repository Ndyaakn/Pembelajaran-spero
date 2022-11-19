<?php
// function argument/parameter 
// -kita bisa mengirim informasi ke function yang ingin kita panggil 
// -untuk melakukan hal tersebut kita perlu menambahkan argument atau parameter di 
// function yang sudah kita buat 
// -cara membuat argument sama seperti cara membuat variabel 
// -argument ditempatkan di dalam kurung () didklarasikan function 
// -argument bisa lebih dari satu jika lebih dari satu harus dipisah menggunakan tanda koma 

// function sayHello($name)
// {
//     echo "Hello $name" .PHP_EOL;
// }

// sayHello("eko");
// sayHello("budi");



// Default argument value 
// -php mendukung default argument value 
// -fitur ini memungkinkan jika ketika kira memanggil function  
// tidak memasukkan parameter kita bisa menentukan data defaultnya apa

// function sayHello($name = "Anonymous")
// {
//     echo "Hello $name" .PHP_EOL;
// }

// sayHello();
// sayHello("budi");

// Kesalahan default argument value 
// -default argument value bisa disimpan argument manapun 
// -namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter 
// awal maka itu kurang berguna

// function sayHello($firstname = "Anonymous", $lastname)
// {
//     echo "Hello $firstname $lastname" .PHP_EOL;
// }

// sayHello();
// sayHello("budi");

// type declaration 
// -sama seperti variable, argument di php bisa kita masukkan data yang dinamis 
// -kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat 
// function yang menggunakan argument dengan tipe data tertentu 
// -untungnya di php kita bisa menambahkan type data di argument, sehingga php akan melakukan
//  pengecekan ketika kita mengirim value ke function tersebut 
// -jika tipe data value tidak sesuai maka akan terjadi error 
// -secara default php akan melakukan perobaan konversi tipe data secara otomatis, 
//  misal jika kita menggunakan tipe int, tapi kita mengirim string maka php akan 
//  otomatis mengkonversii string tersebut menjadi int 

// Valid types 
// type                            keterangan
// class/interface                 parameter harus tipe class/interface 
// self                            parameter harus sama dengan class dimana function ini di buat 
// array                           parameter harus array 
// collable                        parameter harus callable 
// bool                            parameter harus boolean 
// float                           parameter harus floating point 
// bool                            parameter harus boolean 
// int                             parameter harus integer number 
// string                          parameter harus string
// interable                       parameter harus array atau tipe traversable 
// object                          parameter harus sebuah object  

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" .PHP_EOL;
}

SUM(100, 100);
SUM("100", "100");
// SUM("100", "salah");
SUM(false, true);

// variable-leghth argument list 
// -variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter 
// yang menerima banyak value 
// -variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, 
// namun kita tidak perlu membuat manual mengirim array ke functionnya 
// -variable-length argument list hanya bisa dilakukan di argument posisi terakhir 
// -untuk membuat variable-length argument list kita bisa menggunakan tanda ... (titik tiga kali) 
// sebelum nama argument

// function sumAll(array $values) //tanpa variable-length
// {
//     $total = 0;
//     foreach ($values as $value){
//         $total +=$value;
//     }
//     echo "Total" . implode(",", $values). "=$total". PHP_EOL;
// }
// sumAll([1,2,3,4,5]);

function sumAll(... $values)
{
    $total = 0;
    foreach ($values as $value){
        $total +=$value;
    }
    echo "Total" . implode(",", $values). " = $total". PHP_EOL;
}
$values =[1,2,3,4,5];
sumAll(1,2,3,4,5);
sumAll(...$values);
