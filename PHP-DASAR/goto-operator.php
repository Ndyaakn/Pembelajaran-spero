<?php
// GOTO OPERATOR 
// -jarang digunakan 
// -jika terlalu byk menggunakan goto operator, kode program akan menyesatkan dan 
// membingungkan orang lain membaca kodenya 
// -goto adalah fitur dimana kita bisa loncat ke kode program sesuai keinginan kita 
// -agar goto bisa loncat ke kode prohgram, kita harus membuat 
// label di php dengan menggunakan nama label lalu di akhiri : (colon) 

// Kode :  


goto a;
echo "HELLO world" . PHP_EOL;
a:
echo "Hello a" . PHP_EOL;

$counter = 1;
while(true){
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10){
        goto end;
    }
}
end:
echo "End loop";