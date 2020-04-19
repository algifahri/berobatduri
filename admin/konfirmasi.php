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
    $query = mysqli_query($konek, "UPDATE pasien SET status='konfirmasi' WHERE id = '$_GET[id]'");
    header('Location: index.php');
?>
