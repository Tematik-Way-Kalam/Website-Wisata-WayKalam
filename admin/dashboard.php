<?php 
include 'koneksi.php';
include 'function.php';
echo '<div class="content-wrapper">';
echo header_content("", "halaman_admin.php"); 
echo '<section class="content">
    <div class="container-fluid">
      <div class="row">';        
      
function box($row, $judul, $icon, $bg){
  echo '<div class="col-lg-3 col-6">
          <div class="small-box '.$bg.'">
            <div class="inner">
              <h3>'.$row.'<sup style="font-size: 20px"></sup></h3>
              <p>'.$judul.'</p>
            </div>
            <div class="icon">
              <i class="'.$icon.'"></i>
            </div>
          </div>
        </div>';
}

$sql = mysqli_query($mysqli, "SELECT * FROM admin");
$row = mysqli_num_rows($sql);
if($row <= 0){
  $row = 0;
}
echo box($row, "Admin", "fas fa-user", "bg-success");

$sql = mysqli_query($mysqli, "SELECT * FROM wisata");
$row = mysqli_num_rows($sql);
if($row <= 0){
  $row = 0;
}
echo box($row, "Lokasi", "fas fa-map-marker", "bg-success");

$sql = mysqli_query($mysqli, "SELECT * FROM produk");
$row = mysqli_num_rows($sql);
if($row <= 0){
  $row = 0;
}
echo box($row, "Produk", "fas fa-briefcase", "bg-success");

$sql = mysqli_query($mysqli, "SELECT * FROM penghargaan");
$row = mysqli_num_rows($sql);
if($row <= 0){
  $row = 0;
}
echo box($row, "Penghargaan", "fas fa-trophy", "bg-success");

$sql = mysqli_query($mysqli, "SELECT SUM(jumlah_pengunjung_air_terjun) AS total_pengunjung FROM statistik");
$row = mysqli_fetch_array($sql);
$jml = $row['total_pengunjung'];
if($jml <= 0){
  $jml = 0;
}
echo box($jml, "Jumlah Pengunjung Air Terjun", "fas fa-users", "bg-success");

echo '</div>
      </div>
    </section>
  </div>';
?>  
