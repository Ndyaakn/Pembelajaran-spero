<!-- Tipe data string   
-adalah tipe data reperentasi dari teks 
-string bisa mengandung kosong atau banyak karakter 

Cara membuat data string-->

<?php
// 1. Single quote : echo'nama:'; -->
echo '';
echo 'eKO';

// 2. Double quote : echo "nama". Kelebihan: bisa menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER
// \t untuk TAB, \" untuk  double quote, dll"
echo "Nama : ";
echo "Eko\t Kurniawan\tKhannedy\n";

// 3. Multiline string, untuk membuat string yang lebih satu baris. Untuk melakukan ini sebenarnya kita bisa menggunakan\n sebagai ENTER
// Namun PHP memiliki fitur yang lebih baik yaitu bernama Heredoc  dan Nowdoc 
echo <<<EKO
Eko adalah siswa pak budi yang tinggal sangat dekat dengan sekolah
Eko memiliki banyak teman
Eko anak yang aktif dan periang
Teks ini menggunakan Heredoc
EKO;

// Nowdoc mirip seperti heredoc, yg membedakan adalah nowdoc tidak memiliki kemampuan parsing seperti Heredoc atau double quote. 
echo <<<'EKO'
    Eko adalah siswa pak budi yang tinggal sangat dekat dengan sekolah
    Eko memiliki banyak teman
    Eko anak yang aktif dan periang
    Teks ini menggunakan Nowdoc
EKO;


