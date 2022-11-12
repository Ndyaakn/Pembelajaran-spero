While loop 
-adalah versi perulangan yg lebih sederhana dari pada for loop 
-hanya terdapat kondisi perulangan tanpa ada init statement dan post statement, hanya menggunakan kondisi 


<?php
$counter = 1;

// while ($counter <= 10) {
//     echo "Ini adalah while loop ke-$counter" .PHP_EOL;
//     $counter++;
// }
while ($counter <= 10)://syntax alternatif
    echo "Ini adalah while loop ke-$counter" .PHP_EOL;
    $counter++;
endwhile;