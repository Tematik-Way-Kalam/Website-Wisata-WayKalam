<?php 
  include 'function.php';
  echo '<script src="ajax/info.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Contact Website", "#");
  $label = array("Nomor Telepon", "Alamat", "Link Instagram", "Link Facebook", "Link Website", "Action");
  echo content("", "", $label);
  echo '</div>';

  echo modal_tambah_body("tambah", "Tambah Contact", "infotambah");
  echo form("Nomor", "text", "nomor", "nomor", "Nomor", "", "form-control", "", "required");
  echo '<div class="form-group">
            <label>Alamat</label>
            <textarea type="text" name="alamat" class="form-control" id="alamat" rows=7></textarea>
        </div>';
  echo form("Link Instagram", "text", "ig", "ig", "Link Instagram", "", "form-control", "", "required");
  echo form("Link Facebook", "text", "fb", "fb", "Link Facebook", "", "form-control", "", "required");
  echo form("Link Website", "text", "website", "website", "Link Website", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Contact", "form", "infoedit");
  //End Edit Data
  // echo js_table();
?>