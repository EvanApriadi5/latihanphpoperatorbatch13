<?php
include 'app/models/app.php';

class driver extends app
{
    //menampilkan data
    public static function all()
    {
        $app = new app();

        $sql = "SELECT * FROM driver ORDER BY nama_driver ASC ";

        $result = $app->query($sql); // hasilnya ini akan berbentuk  array
        //jika ditanya tidak ada maka kasih kosongan
        if ($result->num_rows < 1) {
            $hasil[] = [];
        } else {
            //jika ditanya ada maka ambil datanya (fetch_array), ditampung di variabel $data dan isikan
            while ($data = $result->fetch_array()) {
                //variabel $hasil
                $hasil[] = $data;
            }
        }
        return $hasil;
    }
}
