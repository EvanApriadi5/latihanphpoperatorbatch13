<?php
// pembuatan class
class Mobil {

//property
//public file yg lain dapat mengakses properti dan function yg berisifat public
public $roda = 4;
public $warna = "";

//private hanya bisa diakses diclas itu sendiri
private $knalpot = "racing";

public function ambilnilaiknalpot (){
    //$this utk memangil apa2 yg ada pada clasnya sendiri
    return $this->knalpot;
}

public function terbang (){
    return "terbanggg";
}


//method
public function jalan (){
    echo "mobil berjalan kedepan";
}

public function mundur (){
    echo "mobil bergerak mundur";
}

public function nos (){
    echo "wuuuusss";
}



}
// agar class bisa dipakai maka perlu kita buatkan object dari class tersebut
// variabel yg merujuk ke class yg dituju
$crv = new Mobil();


?>