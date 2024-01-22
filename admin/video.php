<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/video.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Video", "#");
  $label = array("Link", "Action");
  echo content("", "", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah", "videotambah");
  echo form("Link", "text", "link", "link", "Link", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Video", "form", "videoedit");
  //End Edit Data
//   echo js_table();
?>