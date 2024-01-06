<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM asset");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
                    if($row['background'] == ''){
                        echo "<td></td>";
                    }else{
                        echo "<td><img src = 'foto_asset_bg/".$row['background']."' width='70px' height='70px' alt='Foto Error'/></td>";
                    }
                    if($row['picture'] == ''){
                        echo "<td></td>";
                    }else{
                        echo "<td><img src = 'foto_asset_pc/".$row['picture']."' width='70px' height='70px' alt='Foto Error'/></td>";
                    }
            echo    "<td>
                        <a href='#' onclick='form_edit(".$row['id_asset'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                        <a href='#' onclick='form_delete(".$row['id_asset'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                    </td>
                </tr>";
            $no++;
        }
    }else{
        echo "<tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td> 
        </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $path          = "foto_asset_bg/".$nama_file;
    $nama_file_    = $_FILES['foto_']['name'];
    $ukuran_file_  = $_FILES['foto_']['size'];
    $tipe_file_    = $_FILES['foto_']['type'];
    $tmp_file_     = $_FILES['foto_']['tmp_name'];
    $path_         = "foto_asset_pc/".$nama_file_;
    move_uploaded_file($tmp_file, $path);
    move_uploaded_file($tmp_file_, $path_);
    $sql = mysqli_query($mysqli, "INSERT INTO asset (background, picture) VALUES ('$nama_file', '$nama_file_')");
}

if(isset($_POST['asset_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM asset WHERE id_asset = '$_POST[asset_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Foto", "foto_asset_bg/", $data['background'], "70px", "70px", "file", 'foto', 'foto', "Foto", "image/*"); 
    echo form_file_edit("Upload Foto", "foto_asset_pc/", $data['picture'], "70px", "70px", "file", 'foto_', 'foto_', "Foto", "image/*"); 
    echo hidden_form("id", "id", $data['id_asset']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $nama_file_    = $_FILES['foto_']['name'];
    $ukuran_file_  = $_FILES['foto_']['size'];
    $tipe_file_    = $_FILES['foto_']['type'];
    $tmp_file_     = $_FILES['foto_']['tmp_name'];
    $path          = "foto_asset_bg/".$nama_file; 
    $path_         = "foto_asset_pc/".$nama_file_; 
    if($nama_file != '' && $nama_file_ == ''){ 
        move_uploaded_file($tmp_file_, $path_);
        $sql = mysqli_query($mysqli, "UPDATE asset SET background = '$nama_file' WHERE id_asset = '$id'");
    }elseif($nama_file_ != '' && $nama_file == ''){
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE asset SET picture = '$nama_file_' WHERE id_asset = '$id'");
    }elseif($nama_file_ != '' && $nama_file != ''){
        move_uploaded_file($tmp_file, $path);
        move_uploaded_file($tmp_file_, $path_);
        $sql = mysqli_query($mysqli, "UPDATE asset SET background = '$nama_file', picture = '$nama_file_' WHERE id_asset = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM asset WHERE id_asset = '$_GET[hapus]'");
}

?>
                  
            