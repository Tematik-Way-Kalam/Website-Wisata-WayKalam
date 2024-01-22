<?php
ob_start();
session_start();

include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$sql = mysqli_query($mysqli, "SELECT * FROM admin WHERE password = '$password' AND username = '$username' ");
$data = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

if($row > 0){
    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = 'login';
    if($data['kategori_admin'] == 'superadmin'){
        $_SESSION['role'] = $data['kategori_admin'];
    }else{
        $sql1 = mysqli_query($mysqli, "SELECT * FROM wisata WHERE id_wisata = '$data[id_wisata]'");
        $data2 = mysqli_fetch_array($sql1);
        if(mysqli_num_rows($sql1) > 0){
            $_SESSION['role'] = $data2['headline'];
        }
    }
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