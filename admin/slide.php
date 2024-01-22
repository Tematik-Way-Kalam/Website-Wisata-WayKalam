<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/slide.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Gambar Slide", "#");
  $label = array("Gambar", "Nama", "Deskripsi", "Action");
  echo content("#tambah", "Tambah Gambar", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Gambar", "slidetambah");
  echo form("Upload Gambar", "file", "gambar", "gambar", "Gambar", "", "", "<br>", "required");
  echo form("Headline", "text", "nama", "nama", "Headline", "", "form-control", "", "required");
  echo '<div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7></textarea>
        </div>';
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Gambar", "form", "slideedit");
  //End Edit Data
  // echo js_table();
?>