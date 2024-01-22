<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/produk.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Produk", "#");
  $label = array("Gambar", "Nama", "Pemilik", "Action");
  echo content("#tambah", "Tambah Produk", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Produk", "produktambah");
  echo form("Upload Gambar", "file", "gambar", "gambar", "Gambar", "", "", "<br>", "required");
  echo form("Nama Produk", "text", "nama_produk", "nama_produk", "Nama Produk", "", "form-control", "", "required");
  if($_SESSION['role'] == 'superadmin'){
    $sql = mysqli_query($mysqli, "SELECT * FROM wisata");
    $no = 1;
    $dt[0] = "Pilih";
    $vl[0] = "";
    while($data = mysqli_fetch_array($sql)){
        $dt[$no] = $data['headline'];
        $vl[$no] = $data['id_wisata']; 
        $no++;
    }
    echo form_select("Pemilik", "form-control", "wisata", "wisata", $dt, $vl);
  }else{
    $sql = mysqli_query($mysqli, "SELECT * FROM wisata");
    $no = 1;
    $dt[0] = "Pilih";
    $vl[0] = "";
    while($data = mysqli_fetch_array($sql)){
        if($_SESSION['role'] == $data['headline']){
            $dt[$no] = $data['headline'];
            $vl[$no] = $data['id_wisata'];
        }
    }
    echo form_select("Pemilik", "form-control", "wisata", "wisata", $dt, $vl);
  }
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Produk", "form", "produkedit");
  //End Edit Data
  // echo js_table();
?>