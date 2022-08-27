<?php 

//file ini untuk action dari form yg mengunakanya

//memanggil file yg ingin dibukak
include'../lib/function.php';

//variabel yg berisi inputan diambil dari atribut awal index.php
$inputan = [
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'jenis_kelamin' => $_POST['jenis_kelamin']

];
$getinputan = getinputan($inputan);

?>

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
    
<div class="container">
        <h1>Output</h1>
        <p>NIM : <?php echo $getinputan['nim'] ?></p>
        <p>NAMA : <?php echo $getinputan['nama'] ?></p>
        <p>Jenis Kelamin : <?php echo $getinputan['jenis_kelamin'] ?></p>



</div>
</body>
</html>
