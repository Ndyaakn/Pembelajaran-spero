<?php
/*For loop 
-For adalah salah satu kata kunci yg bisa di gunakan utk melakukan perulangan
-Blok kode yg terdapat di dalam for akan selalu diualngi selama kondisi for terpenuhi 
 
Syntax perutangan untuk for 
for(init statement; kondisi; post statement){
    //blok perulangan
}

-init statement akan dieksekusi hanya sekali di awal sebelum perulangan 
-kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan di lakukan
 jika false perulangan akan berhenti 
 -Post statement akan diekseekusi setiap kali diakhir perulangan 
 -Init statement, kondisi dan post statement tidak wajib diisi, jika kondisi tidak diisi berartu kondisi selalu bernilai true */

 
//  for (; ;){
//     echo "Hello ini adalah for loop" .PHP_EOL;
//  }

//  $counter = 1;
//  for (; $counter <= 10;){
//     echo "Hello idalah for loop ke-$counter" .PHP_EOL;
//     $counter++;
//  }

 //init statement
//  for ($counter = 1 ; $counter <= 10;){
//     echo "Hello idalah for loop ke-$counter" .PHP_EOL;
//     $counter++;
//  }

 //post statement 
//  for ($counter = 10 ; $counter >= 1; $counter--){
//     echo "Hello idalah for loop ke-$counter" .PHP_EOL;
//  }

 //syntax alternatif 
 for ($counter = 10 ; $counter >= 1; $counter--):
    echo "Hello idalah for loop ke-$counter" .PHP_EOL;
 endfor;

