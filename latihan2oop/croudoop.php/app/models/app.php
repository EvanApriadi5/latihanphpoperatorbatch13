<?php
class app {
//panggil file config/database.php
//fungsi yg pertama kali dieksekusi saat class dipanggil
public function __construct()
{
    include 'app/config/database.php';
}
protected function query ($query) {
    //membuat objek dari kelas database
    $db = new Database ();
//panggil koneksi
    $mysqli = $db->koneksi();

    $result = $mysqli->query($query);

    return $result;
}

}

?>
