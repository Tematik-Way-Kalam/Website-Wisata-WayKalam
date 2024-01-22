<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/penghargaan_ld.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Penghargaan", "#");
  $label = array("Set Pada Halaman Utama", "Action");
  echo content("", "", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Penghargaan", "penghargaan_ldtambah");
  $sql = mysqli_query($mysqli, "SELECT * FROM penghargaan");
  $no = 1;
  $dt[0] = "Pilih";
  $vl[0] = "";
  while($data = mysqli_fetch_array($sql)){
    $dt[$no] = $data['headline'];
    $vl[$no] = $data['id_penghargaan']; 
    $no++;
  }
  echo form_select("Nama", "form-control", "penghargaan", "penghargaan", $dt, $vl);
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Penghargaan", "form", "penghargaan_ldedit");
  //End Edit Data
  // echo js_table();
?>