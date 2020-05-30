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

// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', angkatan='$angkatan', kalkulus='$kalkulus', alpro='$alpro', pti='$pti', nilai='$nilai' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>