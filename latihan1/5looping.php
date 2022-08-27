<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan looping</title>
</head>

<body>
    <?php
    //    looping menampilkan data yang lebih dari satu secara berurut dan berulang sesuai logika yg dibuat
    // looping for perulangan yg diketahui nilai awal dan akhirnya

    // struktur penulisan looping ada 2 pilihan
    // for($nilaiawal; $nilaiakhir <= batasan; $variabel++ ):

    // endfor;

    // struktur penulisan looping ada 2 pilihan
    // for($nilaiawal; $nilaiakhir <= batasan; $variabel++ ){

    // }

    for ($i = 1; $i <= 10; $i++) {
        echo "hello ke - $i <br>";
    }

    echo "<hr>"; //menampilkan garis horizontal

    // // looping while => perulangan yg tidak diketahui nilai akhirnya
    // $nilaiawal = 1;
    // while ($nilaiawal <= 10) {
    //     echo "hello ke - $nilaiawal <br>";
    //     $nilaiawal++;
    // }
    // echo "<hr>";

    // perintah perulang decrement kebalikan dari urutan angka
    for ($j = 10; $j >= 1; $j--) :
        echo "hello ke - $j <br>";
    endfor;
    echo "<hr>";

    // foreach => perulangan yg datanya bertipe array
    // tipe array yg biasanya dapat dari query database
    // contoh array asosiatif
    $datamahasiswa = array(

        array(
            // value
            "id" => 1,
            "nim" => "111213",
            "nama" => "evan"
        ),

        array(
            // value
            "id" => 2,
            "nim" => "121212",
            "nama" => "tukiyem"
        ),
    );

    $data2 = [
        'data1',
        'data2',
        'data3'
    ];

    //lakukan perulangan yg menmpilkan isi $data2
    foreach ($data2 as $dt2) {
        echo "$dt2 <br>";
    }
    ?>
    <!-- <tr> baris <th>head tabel kolom <td>kolom pada isi tabel -->
        <!-- head tabel -->
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
            </tr>
        </thead>
        <!-- isi tabel-->
        <tbody>
            <?php
            $no = 1;
            foreach ($datamahasiswa as $dtm) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dtm['nim'] ?></td>
                    <td><?php echo $dtm['nama'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>