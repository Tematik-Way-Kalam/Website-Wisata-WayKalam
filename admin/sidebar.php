<?php
session_start();
include "koneksi.php";
if(empty($_SESSION['status'])){
    ?>
    <script>
      window.location.href = "index.php";
    </script>
    <?php
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="dist/img/lamsel.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Wisata Way Kalam</span>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
            function menu($link, $menu, $icon){
              $ret = ' <li id="menu" class="nav-item">
            <a href="'.$link.'" class="nav-link">
              <i class="nav-icon '.$icon.'"></i>
              <p>
                '.$menu.'      
              </p>
            </a>
          </li> ';
          return $ret;
          }
          echo menu('dashboard.php', 'Dashboard', 'fas fa-tachometer-alt');
          echo menu('admin.php', 'Admin', 'fas fa-user');
          echo menu('lokasi.php', 'Lokasi di Map', 'fas fa-map-marker');
          echo menu('wisata.php', 'Lokasi', 'fas fa-home');
          echo menu('produk.php', 'Produk', 'fas fa-briefcase');
          echo menu('fasilitas.php', 'Fasilitas', 'fas fa-th-list');
          echo menu('contact.php', 'Contact Lokasi', 'fas fa-address-book');
          echo menu('gambar_katalog.php', 'Gambar Katalog', 'fas fa-camera-retro');
          if($_SESSION['role'] == 'superadmin'){
            echo menu('penghargaan.php', 'Penghargaan', 'fas fa-trophy');
            echo menu('penghargaan_ld.php', 'Set Halaman Utama', 'fas fa-trophy');
            echo menu('statistik.php', 'Statistik Air Terjun', 'fas fa-chart-bar');
          }elseif($_SESSION['role'] == 'Air Terjun Way Kalam' || $_SESSION['role'] == 'Air Terjun Anakan'){
            echo menu('statistik.php', 'Statistik Air Terjun', 'fas fa-chart-bar');
          }
          if($_SESSION['role'] == 'superadmin'){
            echo menu('slide.php', 'Gambar Slide', 'fas fa-image');
            echo menu('video.php', 'Video', 'fas fa-video');
            echo menu('testimoni.php', 'Testimoni', 'fas fa-comment');
            echo menu('info.php', 'Contact Website', 'fas fa-address-book');
          }
          ?>
          <script>
            function log() {
              var jawaban = confirm("Apakah Anda yakin?");
              if (jawaban) {
                window.location.href = "logout.php";
              }
            }
          </script>
          <li class="nav-item">
            <a onclick="log()" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout      
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>