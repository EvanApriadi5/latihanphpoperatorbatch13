<?php 

//memangil file
 include '4statis.php';


 //panggil nama class :: $variabel atau function ()
 $kakisinga = singa :: $kaki;
 $larisinga = singa :: $lari();


 echo "kaki singa : " . $kakisinga;
 echo PHP_EOL;
 $kakisinga = 6;
 echo "ubah nilai kaki singa : $kakisinga";
 echo PHP_EOL;
 echo "ambil function lari() : $larisinga";



 ?>