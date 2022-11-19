<?php
// Arrow function 
// -diperkenalkan di PHP 7.4, sebagai alternative anonymous function yang lebih sederhana pembuatannya 
// -secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama 
// -hal yang membedakan di arrow function dan anonymous function adalah secara otomatis 
// variable di luar closure bisa digunakan, tidak seperti anonymous function yang harus 
// disebutkan secara manual menggunakan kata kunci use 
// -pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn 
// -arrow function di khususnya untuk pembuatan function yang sederhana 

$firstName = "eko";
$lastName = "kurniawan";

$anonymousFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" .PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" .PHP_EOL;
echo $anonymousFunction();
echo $arrowFunction();