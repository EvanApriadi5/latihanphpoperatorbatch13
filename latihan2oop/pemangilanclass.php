<?php 
//memangil file
 include '3properti.php';

 //buat object agar class mobil yg ada di file 3property.php bisa dipakai
 $mobil1 = new Mobil();
 $mobil2 =  new Mobil();

 //setelah membuat object dari class maka kita bisa memanggil apa2 yg ada diclass tersebut
 echo "roda awal : $mobil1->roda";

//ganti nilai pada property roda
 $mobil1->roda = 6;

 $mobil1->warna = "black";
 PHP_EOL;
 echo $mobil1->warna;
 echo "roda setelah diubah nilainya $mobil1->roda <br>";
 $mobil1->jalan();
 $mobil2->nos();






?>