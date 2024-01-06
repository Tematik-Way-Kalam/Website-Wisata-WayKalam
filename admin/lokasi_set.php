<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM lokasi");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
            echo    "<td>".$row['nama']."</td>
                    <td>".$row['deskripsi']."</td>";
                    if($row['picture'] == ''){
                        echo "<td></td>";
                    }else{
                        echo "<td><img src = 'foto_lokasi/".$row['picture']."' width='70px' height='70px' alt='Foto Error'/></td>";
                    }
            echo    "<td>
                        <a href='#' onclick='form_edit(".$row['id_lokasi'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
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
                <td>-</td>     
        </tr>";
    }
}

if(isset($_POST['lokasi_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM lokasi WHERE id_lokasi = '$_POST[lokasi_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Nama", "text", "nama", "nama", "Nama", $data['nama'], "form-control", '', "");
    echo '<div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7>'.$data['deskripsi'].'</textarea>
        </div>';
    echo form_file_edit("Upload Foto", "foto_lokasi/", $data['picture'], "70px", "70px", "file", 'foto', 'foto', "Foto", "image/*"); 
    echo hidden_form("id", "id", $data['id_lokasi']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];  
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $path          = "foto_lokasi/".$nama_file; 
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE lokasi SET nama = '$nama', deskripsi = '$deskripsi' WHERE id_lokasi = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE lokasi SET nama = '$nama', deskripsi = '$deskripsi', picture = '$nama_file' WHERE id_lokasi = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM lokasi WHERE id_lokasi = '$_GET[hapus]'");
}

?>
                  
            