<?php
  session_start();
  ob_start();
  if(isset($_SESSION['status'])){
    header("location:halaman_admin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Admin</title>
  </head>
  <body>
    <!-- MAIN FRAME -->
    <div class="container">
      <div id = "xbs" class="row">
        <div class="col-md-6 offset-md-3">
          <h2 class="text-center text-dark mt-5">Admin Login</h2>
          <div class="text-center mb-1 text-dark">Website Wisata Way Kalam</div>
          <!-- Pembuatan Card Login -->
          <div class="card my-4">
            <form class="card-body cardbody-color p-lg-5" action="login.php" method="POST">
              <!-- Pemetaan pada gambar -->
              <div class="text-center">
                <img src="dist/img/lamsel.png" class="img-fluid profile-image-pic my-5" width="30%" height="30%" alt="Logo" />
              </div>
              <!-- Pemteaan pada kolom email, password dan tombol submit -->
              <div class="mb-3">
                <input type="text" name="username" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="nama@example.com" required/>
              </div>
              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required/>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-dark px-5 mb-3 w-100">Login</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

