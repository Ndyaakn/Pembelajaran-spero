<!-- Tipe data number:
terdapat dua jenis tipe data number:
1. (int) Bilangan bulat decimal(base 10), hexadecima(base 16), okta(base 8), binary(base 2) dan 
2. (float) bilangan pecahan.
Di PHP kita bisa menambahkan _(garis bawah) di angka, ini hanya untuk agar mudah dibaca saat di jalankan, _(garis bawah) tersebut akan di ignore_user_abort
Untuk angka negatif, kita bisa menggunakan tanda -(minus) di depan angka

var_dump(sebuah function yang dapat melihat tipe sebuah data) -->

<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111111);

echo "Underscore di number : ";
var_dump(1_234_567);


// float

echo "floating point : ";
var_dump(1.234);

echo "floating point dengan E notaion plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "floating point dengan E notaion Minu (7 x 0.001) : ";
var_dump(1.7e-3);
echo "underscore kali floating point  : ";
var_dump(1_123.123);

// Integer overflow
// Secara default kapasitas integer di php ada batasannya, 2147483647 untulk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
// Jika kita membuat number integer yang melebihi nilai tersebut maka secara otomatis tipe numbernya berubah menjadi floating point

echo "Integer overflow 32 bit : ";
var_dump(2147483648);
echo "Integer overflow 32 bit : ";
var_dump(9223372036854775808);
