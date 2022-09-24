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

    public static function find($id)
    {
        $app = new app();

        $sql = "SELECT * FROM driver WHERE id_driver='$id' ";

        $result = $app->query($sql); // hasilnya ini akan berbentuk  array
        //jika ditanya tidak ada maka kasih kosongan
       
            //jika ditanya ada maka ambil datanya (fetch_array), ditampung di variabel $data dan isikan
            $hasil = $result->fetch_array();
   
        return $hasil;

    }




    public static function create(array $data)
    {
        $app = new app();
        $nama_driver = $data['nama_driver'];
        $kota_driver = $data['kota_driver'];
        $jumlah_order = $data['jumlah_order'];
        $pendapatan_driver = $data['pendapatan_driver'];

        $sql = "INSERT INTO driver (nama_driver, kota_driver, jumlah_order, pendapatan_driver) VALUES ('$nama_driver', '$kota_driver', '$jumlah_order', '$pendapatan_driver')";
        $result = $app->query($sql);
    }

    public static function update(array $data)
    {
        $app = new app();
        $id_driver = $data['id_driver'];
        $nama_driver = $data['nama_driver'];
        $kota_driver = $data['kota_driver'];
        $jumlah_order = $data['jumlah_order'];
        $pendapatan_driver = $data['pendapatan_driver'];

        $sql = "UPDATE driver SET driver 'nama_driver', kota_driver = '$kota_driver', jumlah_order= '$jumlah_order', pendapatan_driver = '$pendapatan_driver' WHERE id_driver = '$id_driver' ";
        $result = $app->query($sql);
        return $result;
    }

    public static function destroy($id) {
        $app = new app();
        $sql = "DELETE FROM driver WHERE id_driver='$id' ";
        $result = $app->query($sql);
        return $result;
    }
}
