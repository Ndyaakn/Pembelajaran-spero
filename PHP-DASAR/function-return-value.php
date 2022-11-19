<?php
// function return value 
// -secara default, function itu tidak menghasilkan value apapun, 
// namun jika kita ingin kita bisa membuat sebuah function mengembalikan nilai. 
// -dan didalam blok function, untuk menghasilkan nilai tersebut kita harus
// menggunakan kata kunci return, lalu diikuti dengan data yang ingin di hasilkan 
// -kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu.

function sum(int $first, int $second)
{
    $total =$first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$total =sum (23, 20);
var_dump($total);


function sum1(int $first, int $second)
{
    return $first + $second;
}

$total =sum (10, 10);
var_dump($total);

$total =sum (20, 20);
var_dump($total);

// func
function getFinalValue(int $value )
{
    if ($value>=80){
        return "A";
    }
    if ($value>=70){
        return "B";
    }
    if ($value>=60){
        return "C";
    }
    if ($value>=50){
        return "D";
    }else {
        return "E";
    }
    echo "Ups" .PHP_EOL;

}

$score = getFinalValue(30);
var_dump($score);

// Return Type Declarations 
// -sama seperti ppada argument, pada return value kita bisa mendeklarasikan tipe datanya 
// hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga 
// digunakan untuk menjaga jangan sampai kita mengembalikann tipe data yang salah di function
// -untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan ; 
// diikuti tipe kembaliannya 

function sum2(int $first, int $second): int //tipe data kembalian ialah int
{
    return $first + $second;
}

$total =sum (10, 10);
var_dump($total);