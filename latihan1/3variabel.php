<!DOCTYPE html>
<?php
//variabel
$title = "latihan operator";
$a = 7;
$b = 3;

$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

?>
<html>
<head>
<title>latihan</title>
</head>
<Body>
<p> <?php echo "penjumlahan $a + $b = $penjumlahan" ?> </p>
<p> <?php echo "$a - $b = $pengurangan" ?> </p>
<p> <?php echo "perkalian = $perkalian" ?> </p>
<p> <?php echo "pembagian = $pembagian" ?> </p>
<p> <?php echo "sisabagi = $sisabagi" ?> </p>
<p> <?php echo "pangkat = $pangkat" ?> </p>

</Body>
</html>