<body style="background: skyblue;">
<?php 

echo "<head><title>DATA MAHASISWA</title></head>";
$fp = fopen("redata.txt", "r");
echo("<center><h1>Data Mahasiswa</h1>");
echo ("<a href='resp.php'>::Isi Data Diri Anda Disini::</a><br><hr>");
echo "<table border='1' width='70%' style='text-align: center;'>";
echo("<tr><td>Tanggal</td><td>Nama</td><td>Nim</td><td>Kelas</td><td>Domisili</td><td>Email</td><td>Agama</td></tr>");
$tanggal=date("d-m-Y");
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$tanggal</td><td>$pisah[0]</td><td>$pisah[2]</td><td>$pisah[1]</td><td>$pisah[3]</td><td>$pisah[4]</td><td>$pisah[5]</td></tr>");
}

echo "</table></center>";
?>
</body>