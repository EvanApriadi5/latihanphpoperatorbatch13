<?php

class database {
    private $dbHost = 'localhost';
    private $dbUser = 'root';
    private $dbPassword = '';
    private $dbName = 'ojek_online';

//buat fungsi untuk koneksi ke database mysql
    public function koneksi(){

        $mysql = new mysqli(
            $this->dbHost,
            $this->dbUser,
            $this->dbPassword,
            $this->dbName
        );

if($mysql->connect_error){
    echo 'gagal koneksi ('.$mysql->connect_error.')';
}
return $mysql;

    }
}

?>