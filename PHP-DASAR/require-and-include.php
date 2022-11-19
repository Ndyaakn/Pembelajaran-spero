<?php
/*require dan include 
-saat membuat aplikasi ada baiknya tidak dibuat dalam satu file 
-lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file 
-php memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain 
-lantas apa bedanya require dan include ?
-pada reqquire, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti 
-pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap di lanjutkan */

require "Lib/myfunction.php";
echo sayHello ("eko", "kurniawan");


/*posisi require dan include 
-kode program php akan di baca dari atas ke bawah oleh karena itu pastikan posisi require dan include sesuai 
dengan yang kita inginkan 
-misal jika sampai kita salah menempatlan posisi require dan include, bisa jadi kita malah memanggil function 
yang belum ada*/

/* require_once dan include_once 
-function require akan selalu mengambil file yang kita inginkan 
-jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut 
akan berkali kali pula kita ambil 
hal ini akan menjadi masalah jika misal dalam file yang kta ambil terdapat defenisi function,
sehingga jika diambil berkali kali akan menyebabkan error redeclare function 
-untungnya di php terdapat function require_once dan include_once, function ini bisa mendektesi jika kita
sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi 