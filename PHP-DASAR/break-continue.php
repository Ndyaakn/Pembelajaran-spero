<?php
// Break dan continue 
// -pada switch kita sudah mengenal kata kunci break yaitu untuk menghentikan case dalam switch 
// -sama dengan pada perulangan break juga digunakan untuk menghentikan seluruh perulangan 
// -namun berbeda dengan continue, continue digunakan untuk enghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya 

//KODE BREAK
// $counter = 1;
// while (true) {
//     echo "Ini adalah for while ke-$counter" .PHP_EOL;
//     $counter++; 

//     if($counter > 10) {
//         break;
//     }
// }

//kode continue 
for ($counter =0; $counter <=100; $counter++){
    if ($counter % 2 == 1){
        continue;
    }
    echo "Hello counter" .$counter .PHP_EOL;    
}