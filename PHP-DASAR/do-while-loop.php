
<?php
// <!-- Do while loop 
// -do while loop adalah perulangan yg mirip dengan while 
// -perbedaanya hanya pada pengecekan kondisi 
// -pengecekan kondisi di while loop dilakukan di awal sebelum perulangan di lakukan, 
//  sedangkan di while loop di lakukan settelah perulangan dilakukan
// -oleh karena itu dalam do while loop minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
$counter = 8;

do {
    echo "ini adalah do-while ke-$counter" .PHP_EOL;
    $counter++;
} while ($counter <=10);