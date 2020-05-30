<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim      = $_POST['nim'];
$nama     = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$kalkulus = $_POST['kalkulus'];
$alpro    = $_POST['alpro'];
$pti      = $_POST['pti'];
$nilai    =($kalkulus+$alpro+$pti)/3;
 
// menginput data ke database
$sql ="insert into mahasiswa set nim='$nim',nama='$nama',angkatan='$angkatan',kalkulus='$kalkulus',alpro='$alpro',pti='$pti',nilai='$nilai'";
mysqli_query($koneksi, $sql);
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>