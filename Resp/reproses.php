<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
$agama = $_POST['agama'];

$fp = fopen("redata.txt" , "a+"); 
fputs($fp, "$nama|$nim|$kelas|$domisili|$email|$agama\n");
fclose($fp);

header("Location: reprosess.php");
 
?>