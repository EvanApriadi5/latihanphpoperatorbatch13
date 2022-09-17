<?php
include 'app/controllers/drivercontroller.php';

//buat object dari kelas driver
$driver = new drivercontroller();

//buat variabel yg isinya adalah mengambil hasil dari function index() yg ada di drivercontroller
$data = $driver->index();
?>
<h1>halaman Driver</h1>

<div class="row">
    <table>
        <tr> 
            <th>No</th>
            <th>Nama</th>
            <th>Kota</th>
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
                <td> Rp.<?=number_format($dt['pendapatan_driver'])?></td>
        </tr>
        <?php
        endforeach;
        ?>

    </table>
</div>