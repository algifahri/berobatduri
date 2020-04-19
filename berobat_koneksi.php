<?php
$server="localhost"; //Nama server default xampp tersebut biasanya localhost
$username="USERNAME_DB"; //Nama root ini biasanya default dari xampp tersebut
$password="PASSWORD_DB"; //Isikan password jika diminta password pada halam awal ke localshost/phpmyadmin kalau tidak ada biarkan saja
$db="NAMA_DB"; //Sesuaikan dengan nama database yang anda sudah buat

$konek = mysqli_connect($server,$username,$password,$db);
date_default_timezone_set("Asia/Jakarta");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 ?>
