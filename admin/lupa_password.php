<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <?php include "icon.php"; ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin </b>POWERLEARN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ubah Password</p>
       <?php
       include "koneksi.php";
        if (isset($_POST['save'])){
            $login = $_POST['email'];
            $password_baru = $_POST['password_baru'];
            $password_ulang = $_POST['password_ulang'];

           if($password_baru == $password_ulang){
               $select = mysqli_query($mysqli, "SELECT * FROM admin WHERE email = '$login' OR username = '$login'");
               $dt = mysqli_num_rows($select);
               if($dt > 0){
                    $sql = mysqli_query($mysqli, "UPDATE admin SET password_admin = '$password_baru' WHERE email = '$login' OR username = '$login'");
                    if($sql){
                        ?>
                        <div class="alert alert-success">Sukses Ubah Password.</div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">Gagal Ubah Password</div>
                        <?php
                    }
               }else{
                    ?>
                    <div class="alert alert-danger">Gagal Ubah Password Email/Username Tidak Sesuai.</div>
                    <?php
                }
           }else{
               ?>
               <div class="alert alert-danger">Gagal Ubah Password Konfirmasi Password Tidak Sesuai.</div>
               <?php
           }
        }
       ?>
      <form method="POST">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Username/Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_baru" class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_ulang" class="form-control" placeholder="Confirm New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="save" class="btn btn-primary btn-block">Submit</button>
          </div>
          <!-- /.col -->
          
        </div>
      </form>
      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="index.php">&ensp; &ensp; Login</a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
