<?php
session_start();
include('berobat_koneksi.php');

$user = mysqli_real_escape_string($konek, $_POST['username']);
$pass = mysqli_real_escape_string($konek, $_POST['password']);

$cekuser = mysqli_query($konek, "SELECT * FROM user WHERE username = '$user'");
$jumlah = mysqli_num_rows($cekuser);
if ( $jumlah == 0 ) {
    echo '<script>alert("Username/password salah"); window.location.href = "login.php";</script>';
} else {
    while($row = mysqli_fetch_array($cekuser))  
    {  
        if(password_verify($pass, $row["password"]))  
        {
            $_SESSION['username'] = $user;
            header('location:admin');
        }
        else{
            echo "gagal";
        }
    }
    
}
?>