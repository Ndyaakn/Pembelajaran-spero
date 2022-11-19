<?php
// Variable function 
// -adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
// -untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), 
// jika ingin menambahkan argument , kita bisa menggunakan $namaVariable(argument) 

function foo(){
    echo "Foo" .PHP_EOL;
}

$functionFoo = "foo";
$functionFoo();

//kegunaannya bisa membikin sebuah argumen disebuah function yang dimana bisa di masukkan function lain 

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" .PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");

function sayHai(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}
sayHai("eko", "sampleFunction");

