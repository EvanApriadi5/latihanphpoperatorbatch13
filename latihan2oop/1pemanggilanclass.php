<?php

include '3properti.php';

//buatkan object dari class mobil
$mobilA = new Mobil();



echo "ambil method terbang : ". $mobilA->ambilnilaiknalpot();
echo PHP_EOL;
echo "ambil method jalan : ". $mobilA->jalan();







?>