<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/testimoni.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Testimoni", "#");
  $label = array("Foto", "Nama", "Status", "Komen", "Action");
  echo content("", "", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah", "testimonitambah");
  echo form("Upload Foto", "file", "foto", "foto", "Foto", "", "", "<br>", "required");
  echo form("Nama", "text", "nama", "nama", "Nama", "", "form-control", "", "required");
  echo form("Status", "text", "status", "status", "Status", "", "form-control", "", "required");
  echo '<div class="form-group">
          <label>Komentar</label>
          <textarea type="text" name="komen" class="form-control" id="Komen" rows=7></textarea>
        </div>';
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Testimoni", "form", "testimoniedit");
  //End Edit Data
//   echo js_table();
?>