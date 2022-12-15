<?php
/*string function
contoh string function 

function            keterangan
join()/implode      menggabungkan array menjadi string 
explode()           memecah string menjadi array 
strtolower()        mengubah string menjadi lowercase 
strtoupper()        mengubah string menjadi uppercase 
substr()            mengambil sebagian string 
trim()              menghapus whitespace didepan dan belakang string */

var_dump(join(",", [10, 11, 12, 13, 14, 15]));
var_dump(explode(" ", "eko kurniawan khanendy"));
var_dump(strtoupper( "eko kurniawan khanendy"));
var_dump(trim( "     eko kurniawan khanendy    "));
var_dump(substr( "eko kurniawan khanendy", 0, 3));