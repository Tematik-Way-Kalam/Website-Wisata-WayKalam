<?php 
  include 'function.php';
  echo '<script src="ajax/contact.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Contact Lokasi", "#");
  $label = array("Contact", "link", "Lokasi", "Action");
  echo content("#tambah", "Tambah Contact Lokasi", $label);
  echo '</div>';

  echo modal_tambah_body("tambah", "Tambah Contact", "contacttambah");
  $vl = array("Instagram", "Facebook", "WhatsApp", "Telegram");
  echo form_select("Contact", "form-control", "contact", "contact", $vl, $vl);
  echo form("Link", "text", "link", "link", "Link", "", "form-control", "", "required");
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

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Contact", "form", "contactedit");
  //End Edit Data
  // echo js_table();
?>