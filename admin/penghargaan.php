<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/penghargaan.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Penghargaan", "#");
  $label = array("Gambar", "Nama", "Deskripsi", "Action");
  echo content("#tambah", "Tambah Penghargaan", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Penghargaan", "penghargaantambah");
  echo form("Upload Gambar", "file", "gambar", "gambar", "Gambar", "", "", "<br>", "required");
  echo form("Nama", "text", "nama", "nama", "Nama", "", "form-control", "", "required");
  echo '<div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7></textarea>
        </div>';
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Penghargaan", "form", "penghargaanedit");
  //End Edit Data
  // echo js_table();
?>