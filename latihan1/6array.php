,<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <?php
    // array tipe data yg bisa menyimpan lebih dari 1 nilai dan dimulai dari 0
    // array indexing
    $buah = ['apel','anggur','mangga'];
    
    var_dump($buah);
    echo $buah[2];
    echo "<hr>";

    // array associative
    // terdiri dari key dan value
   $anggota = [
    "dani"=> "ketua",
    "edo" => "wakil",
    "tono" => "anggota"
];
echo $anggota ['dani'];
    ?>
<hr>

<!-- <ol> adalah buat list tipe number 1 dst
<ul> buat list icon  adalah
<li> buat list -->

<!-- ada 2 struktur penggunaan syntak echo -->

<h4>index array</h4>
<ol>
    <!-- lakukan foreach di LI nya -->
    <?php foreach($buah as $b) { ?>
        <li><?=$b?> </li>
        <?php } ?>
        </li>
</ol>

<h4>associative array</h4>
<ul>
    <!-- lakukan foreach di LI nya -->
    <?php foreach($anggota as $key => $value ) { ?>
        <!-- $key untuk menampung key yg ada pada aray
        $value untuk menampung value yg ada pada aray -->
        <li><?php echo "$key : $key , value : $value"?> 
    </li>
    <?php } ?>     
</ul>




</body>
</html>