<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous
">
</head>

<body>
    <!-- membuat form -->
    <div class="container">
        <h1>Latihan Form</h1>
        <p>Biodata Mahasiswa</p>

        <!-- form dari bootstrap -->
        <!-- method dalam form ada 2 -->
        <!-- 1.GET (default) isi yg diinputkan akan terlihat di address bar browser -->
        <!-- 2.POST isi yg diinputkan tidak akan terlihat di address bar pada browser -->

        <form action="action/action1.php" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="masukan nim" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama" required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
                </select>  
            </div>
            <button class="btn btn-primary">submit</button>


        </form>
    </div>

</body>

</html>