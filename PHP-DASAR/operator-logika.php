<!-- OPERATOR LOGIKA
-adalah operator untuk membandingan dua nilai boolean.
-hasilnya boolean lagi.

operator
$a $$ $b (and) -> true jika $a dan $b keduanya true
$a and $b (and) -> true jika $a dan $b keduanya true
$a || $b (or) -> true jika $a dan $b salah satu atau keduanya true
$a or $b (or) -> true jika $a dan $b salah satu atau keduanya true
! $a (not) -> true jika $a bernilai false
$a xor $b (xor) -> true jika $a dan $b salah satu true, tapi tidak keduanya -->

<?php

var_dump(true && true);
var_dump(false && false);
var_dump(true || false);
var_dump(true || true);


var_dump(true xor false);
var_dump(true xor true);

var_dump(!false);
var_dump(!true);
