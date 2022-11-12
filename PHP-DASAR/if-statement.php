<!-- If statement 
-dalam php if adalah salah satu kunci yang digunakan untuk percabangan 
-percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi 
-hampir di semua bahasa pemograman mendukung if expression 

Syntax if statement  -->

<!-- // if (expression)
// statement;
// if (expression){
// statement1;
// statement2;
// } -->
<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >=75) {
    echo "anda lulus" . PHP_EOL;
} else {
    echo "Maaf anda tidak lulus" .PHP_EOL;
}

// eLSE STATEMENT 
// -Blok if akan dieksekusi ketika kondisi if bernilai true 
// -kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false 
// -hal ini bisa dilakukan menggunakan else statement 

// if(expression)
// statement;
// else
// statement;

// if(expression){
//     statement1;
//     statement2;
// }
// else{
//     statement;
// }

// Else if statement
// -kadang dalam if kita butuh membuat beberapa kondisi 
// -kasus seperti ini di php kita bisa menggunkan else if statement 
// -else if di php bisa lebih dari satu 
// -kode else if di php bisa menggunakan "else if" atau "elseif" (digabung)

// if(expression)
// statement;
// else if
// statement;

// if(expression)
// statement;
// else if
// statement;
// else
// statement;

// Kode : Else if statement

$nilai = 70;
$absen = 90;
if($nilai >= 80 && $absen >= 80){
    echo "Nilai anda a" .PHP_EOL;
} elseif ($nilai >= 70 && $absen >+ 70){
    echo "Nilai anda b" .PHP_EOL;
} elseif ($nilai >= 60 && $absen >+ 60){
    echo "Nilai anda c" .PHP_EOL;
} elseif ($nilai >= 50 && $absen >+ 50){
    echo "Nilai anda d" .PHP_EOL;
} else{
    echo "Nilai anda E" . PHP_EOL;
}

// Syntax alternatif 
// -selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua) 
// -namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement
// if statemnet dengan colon

$nilai = 70;
$absen = 90;
if($nilai >= 70 && $absen >= 80):
    echo "Nilai anda a" .PHP_EOL;
 elseif ($nilai >= 70 && $absen >+ 70):
    echo "Nilai anda b" .PHP_EOL;
 elseif ($nilai >= 60 && $absen >+ 60):
    echo "Nilai anda c" .PHP_EOL;
 elseif ($nilai >= 50 && $absen >+ 50):
    echo "Nilai anda d" .PHP_EOL;
 else:
    echo "Nilai anda E" . PHP_EOL;
 endif;