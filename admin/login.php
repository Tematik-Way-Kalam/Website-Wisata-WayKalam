<?php
ob_start();
session_start();

include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$sql = mysqli_query ($mysqli, "SELECT * FROM admin WHERE password = '$password' AND username = '$username' ");
$data = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

if ($row > 0){
    $_SESSION['email'] = $data['email'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['foto'] = $data['foto_admin'];
    $_SESSION['status'] = 'login';
    $_SESSION['role'] = $data['role'];
    header("location:halaman_admin.php");
	
}else{
    ?>
    <script>
        alert("Email/Password Salah!");
        window.location.href = "index.php";
    </script>
    <?php
}

?>