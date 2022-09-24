<?php
include 'app/controllers/drivercontroller.php';

$id_driver= $_GET['id_driver'];

$driver = new drivercontroller();


$data = $driver->edit($id_driver);

if (isset($_POST['proses'])) {
$data = [
    'id_driver' => $_POST['id_driver'],
    'nama_driver' => $_POST['nama_driver'],
    'kota_driver' => $_POST['kota_driver'],
    'jumlah_order' => $_POST['jumlah_order'],
    'pendapatan_driver' => $_POST['pendapatan_driver']

];
$driver->update($data);

}

?>

<form action="" method="post">
<input type="hidden" name="id_driver" value="<? $data['id_driver'] ?>">

            <div class="mb-3">
                <label for="nama_driver" class="form-label">nama_driver</label>
                <input type="text" class="form-control" id="nama_driver" name="nama_driver" placeholder="masukan nama driver" 
                value="<?= $data['nama_driver'] ?>"required>
            </div>
            <div class="mb-3">
                <label for="kota_driver" class="form-label">kota_driver</label>
                <input type="text" class="form-control" id="kota_driver" name="kota_driver" placeholder="masukan kota driver" 
                value="<?= $data['kota_driver'] ?>"required>
            </div>
            
            <div class="mb-3">
                <label for="jumlah_order" class="form-label">jumlah_order</label>
                <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" placeholder="masukan jumlah order" 
                value="<?= $data['jumlah_order'] ?>"required>
            </div>
            <div class="mb-3">
                <label for="pendapatan_driver" class="form-label">pendapatan_driver</label>
                <input type="number" class="form-control" id="pendapatan_driver" name="pendapatan_driver" placeholder="masukan pendapatan driver" 
                value="<?= $data['pendapatan_driver'] ?>"required>
            </div>


            <button name="proses" class="btn btn-primary"> submit </button>
        </form>