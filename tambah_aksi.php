<?php
session_start();
include('berobat_koneksi.php');

$username = mysqli_real_escape_string($konek, $_POST['username']);
$password = mysqli_real_escape_string($konek, $_POST['password']);
$email = mysqli_real_escape_string($konek, $_POST['email']);
$nomor_hp = mysqli_real_escape_string($konek, $_POST['nomor_hp']);
$nama_klinik = mysqli_real_escape_string($konek, $_POST['nama_klinik']);
$alamat = mysqli_real_escape_string($konek, $_POST['alamat']);
$pass_hash = password_hash($password, PASSWORD_DEFAULT);

$query = mysqli_query($konek, "INSERT INTO user VALUES('$username','$pass_hash','$email','$nomor_hp','$nama_klinik','$alamat')");
if ($query) {
    echo '<script>alert("Berhasil menambahkan"); window.location.href = "login.php";</script>';
} else {
    echo '<script>alert("Gagal"); window.location.href = "tambah_berobat.php";</script>';
}
?>