<?php
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "db_siswa";

// Membuat Koneksi
$conn = mysqli_connect($host, $user, $password, $database) or die("Maaf, koneksi gagal!");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];

$tambah = mysqli_query($conn, "INSERT INTO tb_siswa VALUES ('', '$nama', '$kelas', '$alamat')")or die("Proses menyimpan ke database gagal!");
header("location:cetak_data.php");
?>