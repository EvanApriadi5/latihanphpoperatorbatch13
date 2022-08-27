<?php
//fungsi untuk menerima inputan dari form
function getinputan(array $inputandariform){

//buat variabel untuk menyimpan inputan dari form

$data = [
    //ini adalah inputan dari form sesuaikan dengan atribut nama pada masing2 data input form

    'nim' => $inputandariform ['nim'],
    'nama' => $inputandariform ['nama'],
    'jenis_kelamin' => $inputandariform ['jenis_kelamin']
    
];

return $data;

}

//function menghitung luas persegi panjang
function luaspersegipanjang($panjang, $lebar){

    $luas = $panjang * $lebar;

    return $luas;



}
?>