<?php 
include 'koneksi.php';
include 'function.php';
echo '<div class="content-wrapper">';
echo header_content("Dashboard", "halaman_admin.php"); 
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
echo box($row, "Admin", "fas fa-user", "bg-success");

$sql = mysqli_query($mysqli, "SELECT * FROM lokasi");
$row = mysqli_num_rows($sql);
echo box($row, "Lokasi", "fas fa-map-marker", "bg-success");

$sql = mysqli_query($mysqli, "SELECT * FROM asset");
$row = mysqli_num_rows($sql);
echo box($row, "Asset", "fas fa-th-list", "bg-success");

echo '</div>
      </div>
    </section>
  </div>';
?>  
