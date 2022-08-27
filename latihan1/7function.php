<?php 
// function adalah kelompok script yg berupa instruksi2 untuk membuat suatu fungsi yg akan dijalankan

// contoh penulisan struktur
// 1.function namafunction() {

// }

// 2.function namafunction($parameter) { parameter adalah value}

// }

//contoh
function luasSegitiga($alas, $tinggi){
    // jalankan instruksi
    $luas = $alas * $tinggi / 2;

    return $luas;
}

function luasPersegiPanjang($panjang = 9, $lebar = 10){
    $luas = $panjang * $lebar;

    // agar hasil perhitunganny bisa dipake, maka kita return return untuk memunculkan hasil
    return $luas;
}
// php_eol
// pemanggilan function
// namafunction() / namafunction(isiparameter(value))
$luasSegitiga = luasSegitiga(7,3);

$luasPersegiPanjang = luasPersegiPanjang();
$luasPersegiPanjang2 = luasPersegiPanjang(8,7); // mengubah nilai default dari function luasPersegiPanjang

echo "Luas Segitiga = $luasSegitiga";
echo PHP_EOL;
echo "Luas Persegi Panjang = $luasPersegiPanjang";
echo PHP_EOL;
echo "Luas Persegi Panjang 2 = $luasPersegiPanjang2";

?>
