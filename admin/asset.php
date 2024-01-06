<?php 
  include 'function.php';
  echo '<script src="ajax/asset.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Asset", "#");
  $label = array("Background Picture", "Picture", "Action");
  echo content("#tambah", "Tambah Gambar", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Gambar", "assettambah");
  echo form("Upload Foto", "file", "foto", "foto", "Foto", "", "", "<br>", "required");
  echo form("Upload Foto", "file", "foto_", "foto_", "Foto", "", "", "<br>", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Asset", "form", "assetedit");
  //End Edit Data
  echo js_table();
?>