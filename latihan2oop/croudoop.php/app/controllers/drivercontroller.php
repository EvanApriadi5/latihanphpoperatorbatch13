<?php

class drivercontroller {

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


}

?>