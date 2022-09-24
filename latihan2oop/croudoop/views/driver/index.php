<?php
include 'app/controllers/drivercontroller.php';

//buat object dari kelas driver
$driver = new drivercontroller();

//buat variabel yg isinya adalah mengambil hasil dari function index() yg ada di drivercontroller
$data = $driver->index();
?>
<h1>halaman Driver</h1>

<div class="row">
    <a href="index.php?page=driver&action=add" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <tr> 
            <th>No</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>jumlah_order</th>
            <th>Pendapatan</th>
            </tr>

            <?php 
            $no = 1;
            foreach($data as $dt) :
            ?>

            <tr>
                <td><?= $no++?></td>
                <td><?= $dt['nama_driver'] ?></td>
                <td><?= $dt['kota_driver']?></td>'
                <td><?= $dt['jumlah_order']?></td>'
                <td> Rp.<?=number_format($dt['pendapatan_driver'])?></td>
                <td>
                <a href="index.php?page=driver&action=edit&id_driver=<?= $dt['id_driver'] ?>" class="btn btn-success">Edit</a>
                
                <a href="index.php?page=driver&action=delete&id_driver=<?= $dt['id_driver'] ?>" onclick ="return confirm('yakin hapus data?')" class="btn btn-danger">Hapus</a>
            </td>

        </tr>
        <?php
        endforeach;
        ?>

    </table>
</div>