<?php
include 'app/controllers/drivercontroller.php';

$driver = new drivercontroller();

if (isset($_POST['proses'])) {
$data = [
    'nama_driver' => $_POST['nama_driver'],
    'kota_driver' => $_POST['kota_driver'],
    'jumlah_order' => $_POST['jumlah_order'],
    'pendapatan_driver' => $_POST['pendapatan_driver']

];
$driver->insert($data);

}

?>

<form action="" method="post">
            <div class="mb-3">
                <label for="nama_driver" class="form-label">Nama Driver</label>
                <input type="text" class="form-control" id="nama_driver" name="nama_driver" placeholder="masukan nama driver" 
                value="<?= @$_POST['nama_driver'] ?>"required>
            </div>
            <div class="mb-3">
                <label for="kota_driver" class="form-label">Kota Driver</label>
                <input type="text" class="form-control" id="kota_driver" name="kota_driver" placeholder="masukan kota driver" 
                value="<?= @$_POST['kota_driver'] ?>"required>
            </div>
            
            <div class="mb-3">
                <label for="jumlah_order" class="form-label">jumlah_order</label>
                <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" placeholder="masukan jumlah order" 
                value="<?= @$_POST['jumlah_order'] ?>"required>
            </div>
            <div class="mb-3">
                <label for="pendapatan_driver" class="form-label">pendapatan_driver</label>
                <input type="number" class="form-control" id="pendapatan_driver" name="pendapatan_driver" placeholder="masukan pendapatan driver" 
                value="<?= @$_POST['pendapatan_driver'] ?>"required>
            </div>


            <button name="proses" class="btn btn-primary"> submit </button>
        </form>