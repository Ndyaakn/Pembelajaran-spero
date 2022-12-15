<?php
// recursive function 
// -kemampuan function memanggil function dirinya sendiri 
// -kadang memang ada banyak problem yang lebih mudah diselesaikan menggunakan recursive function, 
// contohnya kasus factorial

function factorialLoop(int $value): int 
{
    $total = 1;
    for ($i=1; $i <=$value; $i++ ){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

function factorialRecursive(int $value): int 
{
    if ($value == 1){
        return 1;
    }else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(6));

// Problem :
// -jika recursive terlalu dalam maka akan ada kemungkinan memory overflow, 
// yaitu eror dimana memory terlalu banyak digunakan di php
// -kenapa problem ini bisa terjadi? karena ketika kita memanggil function, php akan menyimpannya 
// dalam stack, jika fuction tersebut memanggil function laun, maka stack akan menumpuk terus, dan 
// jika terlalu banyak, maka akan membutuhkan komsumsi memory besar, jika sudah melewati batas, 
// maka akan terjadi eror memory

//factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1)
//
/* */

function loop(int $value)
{
    if($value == 0){
        echo "end loop" .PHP_EOL;

    }else {
        echo "loop-$value". PHP_EOL;
        loop($value-1);
    }
}
loop(300);
