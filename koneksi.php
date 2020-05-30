<?php

/** 
 * @var informasi untuk koneksi database 
 */

$koneksi = mysqli_connect("localhost", "", "", "your DB here...");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
