<?php 
  include 'function.php';
  echo '<script src="ajax/gambar_katalog.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Gambar Katalog", "#");
  $label = array("Gambar", "Lokasi", "Action");
  echo content("#tambah", "Tambah Gambar", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Gambar", "gambar_katalogtambah");
  echo form("Upload Gambar", "file", "gambar", "gambar", "Gambar", "", "", "<br>", "required");
  if($_SESSION['role'] == 'superadmin'){
    $sql = mysqli_query($mysqli, "SELECT * FROM lokasi a INNER JOIN wisata b ON a.id_wisata = b.id_wisata");
    $no = 1;
    $dt[0] = "Pilih";
    $vl[0] = "";
    while($data = mysqli_fetch_array($sql)){
      $dt[$no] = $data['headline'];
      $vl[$no] = $data['id_lokasi']; 
      $no++;
    }
    echo form_select("Lokasi", "form-control", "kategori", "kategori", $dt, $vl);
  }else{
    $sql = mysqli_query($mysqli, "SELECT * FROM lokasi a INNER JOIN wisata b ON a.id_wisata = b.id_wisata");
    $no = 1;
    $dt[0] = "Pilih";
    $vl[0] = "";
    while($data = mysqli_fetch_array($sql)){
      if($_SESSION['role'] == $data['headline']){
        $dt[$no] = $data['headline'];
        $vl[$no] = $data['id_lokasi']; 
      }
    }
    echo form_select("Lokasi", "form-control", "kategori", "kategori", $dt, $vl);
  }
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Admin", "form", "gambar_katalogedit");
  //End Edit Data
//   echo js_table();
?>