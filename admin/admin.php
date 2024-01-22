<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/admin.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Admin", "#");
  $label = array("Username", "Kategori", "Action");
  if($_SESSION['role'] == 'superadmin'){
    echo content("#tambah", "Tambah Admin", $label);
  }else{
    echo content("", "", $label);
  }
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Admin", "admintambah");
  echo form("Username", "text", "username", "username", "Username", "", "form-control", "", "required");
  $sql = mysqli_query($mysqli, "SELECT * FROM wisata");
  $no = 1;
  $dt[0] = "Pilih";
  $vl[0] = "";
  while($data = mysqli_fetch_array($sql)){
    $dt[$no] = 'Admin '.$data['headline'];
    $vl[$no] = $data['id_wisata']; 
    $no++;
  }
  echo form_select("Kategori", "form-control", "kategori", "kategori", $dt, $vl);
  echo form("Password", "text", "password", "password", "Password", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Admin", "form", "adminedit");
  //End Edit Data
  // echo js_table();
?>



