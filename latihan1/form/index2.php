<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous
">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <h1>Luas Persegi Panjang</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="panjang" class="form-label">Panjang</label>
                <input type="text" class="form-control" id="panjang" name="panjang" placeholder="masukan panjang" required>
            </div>

            <div class="mb-3">
                <label for="lebar" class="form-label">lebar</label>
            </div>


            <button name="proses" class="btn btn-primary"> submit </button>
        </form>

        <!-- tampilkan hasil pengolahan data luas pesergi panjang saat button dklik -->
        <?php

        // saat button dgn name di proses klik
        if (isset($_POST['proses'])) : //awal if
            include 'lib/function.php';

            // variabel pjg dan lebar untuk dikirim ke function luas luasPersegiPanjang yg ada di file function.php
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            // variabel untuk hasil perhitungan luas
            $luas = luasPersegiPanjang($panjang, $lebar);

        ?>

            <p>
                panjang : <?= $panjang ?>

            </p>
            <p>
                lebar : <?= $lebar ?>

            </p>
            <p>
                luas : <?= $luas ?>

            </p>

        <?php
        endif;
        ?>

    </div>
</body>


</html>