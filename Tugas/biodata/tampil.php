<?php 
// menangkap data nama dengan method post
$nama = $_POST['nama'];
// menangkap data usia dengan method post
$usia = $_POST['usia'];
$agama = $_POST['agama'];
$hobi = $_POST['hobi'];
$citacita = $_POST['citacita'];
$asalsekolah = $_POST['asalsekolah'];
$tempatlahir = $_POST['tempatlahir'];
 
// menampilkan data nama
echo "Anda, " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Anda Berusia " . $usia;
echo "<br/>";
echo "Anda beragama " . $agama;
echo "<br/>";
echo "Anda melakukan " . $hobi." saat bosan";
echo "<br/>";
echo "Anda Bercita-cita menjadi " . $citacita;
echo "<br/>";
echo "Anda Berasal dari SMP " . $asalsekolah;
echo "<br/>";
echo "Anda lahir di Kota/Kabupaten " . $tempatlahir;
echo "<br/>";
?>