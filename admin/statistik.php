<?php 
include 'function.php';
echo '<script src="ajax/statistik.js"></script>';
echo '<div class="content-wrapper">';
echo header_content("Jumlah Pengunjung Air Terjun", "#");
$label = array("Tahun", "Rata-Rata Hari", "Statistik Perbulan");
echo content("#tambah", "Rekap Data", $label, FALSE);
echo '</div>';

//Tambah Data Pop Up
echo modal_tambah_body("tambah", "Tambah", "statistiktambah");
echo form("Jumlah Pengunjung", "number", "jumlah", "jumlah", "Jumlah Pengunjung", "", "form-control", "", "required");
echo form("Tanggal", "date", "tanggal", "tanggal", "Tanggal", date('Y-m-d'), "form-control", "", "required");
echo modal_tambah_footer("tambah()");
//End Tambah Data
?>