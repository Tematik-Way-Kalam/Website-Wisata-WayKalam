<?php 
  include 'function.php';
  echo '<script src="ajax/lokasi.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Lokasi", "#");
  $label = array("Nama", "Deskripsi", "Picture", "Action");
  echo content("", "", $label);
  echo '</div>';

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Lokasi", "form", "lokasiedit");
  //End Edit Data
  echo js_table();
?>



