<?php
// callback function 
// - sebuah mekanisme sebuah function memanggil function lainnyta sesuai dengan yang di berikan di argument 
// - namun di php ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable 
// -dan untuk memanggil callback function tersebut, kita bisa menggunakan function 
// call_user_func(callable, arguments)

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("eko", "strtoupper");
sayHello("eko", "strtolower");
sayHello("eko", function (string $name): string {
   return  strtolower($name);}
);

sayHello("eko", fn($name) => strtoupper($name));