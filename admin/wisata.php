<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/wisata.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Lokasi", "#");
  $label = array("Kategori", "Gambar", "Nama", "Deskripsi", "Action");
  if($_SESSION['role'] == 'superadmin'){
    echo content("#tambah", "Tambah Lokasi", $label);
  }else{
    echo content("", "", $label);
  }
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Lokasi", "wisatatambah");
  $vl = array("Wisata", "UMKM", "Home Stay", "Peternakan", "Warung/Toko", "Lainnya");
  echo form_select("Kategori", "form-control", "kategori", "kategori", $vl, $vl);
  echo form("Upload Gambar", "file", "gambar", "gambar", "Gambar", "", "", "<br>", "required");
  echo form("Nama", "text", "nama", "nama", "Nama", "", "form-control", "", "required");
  echo '<div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7></textarea>
        </div>';
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Tempat", "form", "wisataedit");
  //End Edit Data
  // echo js_table();
?>