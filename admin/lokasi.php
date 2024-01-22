<?php 
  include 'koneksi.php';
  include 'function.php';
  echo '<script src="ajax/lokasi.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Lokasi di Map", "#");
  $label = array("Kategori", "Gambar", "Nama Lokasi", "Deskripsi", "Action");
  if($_SESSION['role'] == 'superadmin'){
    echo content("#tambah", "Tambah Lokasi", $label);
  }else{
    echo content("", "", $label);
  }
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Lokasi", "lokasitambah");
  // $vl = array("Wisata", "UMKM", "Home Stay", "Peternakan", "Warung/Toko");
  // echo form_select("Kategori", "form-control", "kategori", "kategori", $vl, $vl);
  echo form("Upload Gambar", "file", "gambar", "gambar", "Gambar", "", "", "<br>", "required");
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
    echo form_select("Nama Lokasi", "form-control", "wisata", "wisata", $dt, $vl);
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
        $no++;
    }
    echo form_select("Nama Lokasi", "form-control", "wisata", "wisata", $dt, $vl);
  }
  echo '<div class="form-group">
          <label>Deskripsi</label>
          <textarea type="text" name="deskripsi_lokasi" class="form-control" id="deskripsi" rows=7></textarea>
        </div>';
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Lokasi", "form", "lokasiedit");
  //End Edit Data
  // echo js_table();
?>