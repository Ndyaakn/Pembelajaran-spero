<?php
// Anonymous function 
// -ialah function tanpa nama, di php disebut juga dengan closure 
// -biasanya digunakan sebagai argument atau sebagai value di variable 
// -membuat kita bisa mengirim function sebagai argument di function lainnya 

$sayHello = function(string $name)
{
    echo "Helo $name" .PHP_EOL;
};

$sayHello("eko");
$sayHello("budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" .PHP_EOL;
}
sayGoodBye("eko", function (string $name): string{
    return strtoupper($name);
});

$filterFunction = function (string $name): string{
    return strtoupper($name);
};
sayGoodBye("eko", $filterFunction);

// mengakses variable diluar closure 
// -secara default, anonymous function tidak bisa mengakses variable yang terdapat di luar function 
// -jika kita ingin menggunakan variable yang terdapat di luar anonymous function, kita perlu 
// explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable
//  yang kita ingin gunakan 

$firstName = "eko";
$lastName = "kurniawan";

$sayHelloEko = function() use ($firstName, $lastName){
    echo "hello $firstName $lastName" .PHP_EOL;
};

$sayHelloEko();