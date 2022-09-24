<?php

class drivercontroller
{

    public function __construct()
    {
        include 'app/models/driver.php';
    }
    //function menampilkan data pertama kali
    public function index()
    {

        $data = driver::all(); //variabel menyimpan data

        return $data;
    }

    public static function insert(array $inputan)
    {
        $insertData = driver::create(
            [
                'nama_driver' => $inputan['nama_driver'],
                'kota_driver' => $inputan['kota_driver'],
                'jumlah_order' => $inputan['jumlah_order'],
                'pendapatan_driver' => $inputan['pendapatan_driver'],
            ]
        );

        if ($insertData == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver&action=add'; </script>";
        }
    }


    public static function edit($id)
    {
        $data = driver::find($id);
        return $data;
    }

    public static function update(array $inputan)
    {
        $updatedata = driver::update(
            [
                'nama_driver' => $inputan['nama_driver'],
                'kota_driver' => $inputan['kota_driver'],
                'jumlah_order' => $inputan['jumlah_order'],
                'pendapatan_driver' => $inputan['pendapatan_driver'],
            ]
        );
        if ($updatedata == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver&action=add'; </script>";
        }
    }
    public static function delete($id)
    {
        $deletedata = driver::destroy($id);
        if ($deletedata == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver&action=add'; </script>";
        }
    }
}
