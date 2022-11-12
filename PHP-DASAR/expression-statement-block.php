Expression 
-ialah bagian terpenting di php 
-diphp hampir semua kode yang kita tulis adalah senuah expression  
-Secara sederhana expression adalah apapun yang memiliki nilai atau value 
Contoh expression sederhana 
$a =5 ketika kita menuliskan "5", maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression. 
lalu kita menulis kode $b = $a, bisa kita bilang adalah expression, karena $a adalah nilai 5
Contoh expression complex 
function getValue()
{
    return 100;
}
$value = getValue();

Statement 
adalah kalimat lengkap dalam bahasa 
sebuah statement berisikan execution komplet yang di akhiri titik koma ;
 cth :
 $name = "eko kurniawan"
 echo $name;
 $date = newDateTime();

 Block 
 adalah kumpulan statement yg terdiri dari nol atau lebih 
 blok diawali dan diakhirei dengan kurung kurawal 
  cth: 
  function runApp($name) 
  {
     echo "Start pROGRAM" . PHP.EOL;
     echo "Hello $name" . PHP_EOL;
     echo "End Program" . PHP_EOL;
  }