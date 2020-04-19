<?php
session_start();
if ( !isset($_SESSION['username']) ) {
  header('location:../login.php'); 
}
else { 
  $usr = $_SESSION['username']; 
}
require_once('../berobat_koneksi.php');
$query = mysqli_query($konek, "SELECT * FROM user WHERE username = '$usr'");
$hasil = mysqli_fetch_array($query);
if (empty($hasil['username'])) {
  header('Location: ../login.php');
}

$nama = mysqli_real_escape_string($konek, $_POST['nama']);
$alamat = mysqli_real_escape_string($konek, $_POST['alamat']);
$nomor_hp = mysqli_real_escape_string($konek, $_POST['nomor_hp']);
$nomor_mc = mysqli_real_escape_string($konek, $_POST['nomor_mc']);

$query = mysqli_query($konek, "INSERT INTO pasien(nama,alamat,nomor_hp,nomor_mc,klinik) VALUES('$nama','$alamat','$nomor_hp','$nomor_mc','Dr Syafni Bidan Ulfa')");
if ($query) {
    echo '<script>alert("Berhasil Mendaftar, Silahkan tunggu telfon dari dokter"); window.location.href = "index.php";</script>';
} else {
    echo '<script>alert("Gagal"); window.location.href = "index.php";</script>';
}
?>
