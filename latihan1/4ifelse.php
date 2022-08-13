<!DOCTYPE html>

<html>
<head>
<title>latihan if else</title>
</head>
<Body>
    <h1>nilai</h1>
<?php
// variabel
 
$NUTS = 70;
$NUAS = 98;
$NRATA = ($NUTS + $NUAS)/2;
$nilai = 98;

// CONTOH IF 2 KONDISI
 if($nilai > 80 ) {
    $keterangan = "lulus";
 } else {
    $keterangan = "tidak lulus";
 }

//  CONTOH IF MULTIPLE KONDISI 
// 90 - 100
if($NRATA >= 90 and $NRATA <= 100 ) {
   $keterangan = "A";  
}

// 80 - 89
else if($NRATA >= 80 and $NRATA <= 89){
   $keterangan = "b";
}

// 70 - 79
else if($NRATA >= 70 and $NRATA <= 79){
   $keterangan = "c";
}

else if($NRATA < 70) {
   $keterangan = "d";
} {
   $keterangan = "undifined";
}

// variabel
$var = 78;
$var2 = 98;
if ($var == 88 || $var == 78) { //|| sama dengan or
   $hasil = "ya";
} else {
   $hasil = "tidak";
}

if ($var == 88 || $var2 == 98) { //&& sama dengan and
   $hasil2 = "ya";
} else {
   $hasil2 = "tidak";
}

?>
<p> <?php echo "nilai : $nilai" ?> </p>
<p> keterangan : <?php echo $keterangan ?> </p>
<p> hasil : <?php echo $hasil ?> </p>
<p> hasil2 : <?php echo $hasil2 ?> </p>

</Body>
</html>