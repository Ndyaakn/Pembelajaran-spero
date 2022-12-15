<?php
/*Switch statement
-kadang kita hanya butuh menggunakan kondisi sederhana di if statement seperti hanya menggunakan perbandingan == 
-switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya 
-kondisi di switch statement hanya untuk perbandingan == */
$nilai = "A";
switch ($nilai) {
    case "A":
        echo "anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
}

// Syntax alternatif 
// -sama seperti if statement switch statement juga bisa tanpa menggunakan {}(kurung kurawal)
// -namun diakhir switch statement kita harus menambahkan kata kunci endswitch
switch ($nilai):
    case "A":
        echo "anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
    endswitch;

