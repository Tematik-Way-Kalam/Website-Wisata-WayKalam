<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM info");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
            echo    "<td>".$row['nomor_telp']."</td>
                    <td>".$row['alamat']."</td>
                    <td>".$row['link_ig']."</td>
                    <td>".$row['link_fb']."</td>
                    <td>".$row['link_website']."</td>";
            echo    "<td>
                        <a href='#' onclick='form_edit(".$row['id_info'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
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
                <td>-</td>     
                <td>-</td>     
        </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $ig = $_POST['ig'];
    $fb = $_POST['fb'];
    $website = $_POST['website'];
    $sql = mysqli_query($mysqli, "INSERT INTO info (nomor_telp, alamat, link_ig, link_fb, link_website) VALUES ('$nomor', '$alamat', '$ig', '$fb', '$website')");
}

if(isset($_POST['info_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM info WHERE id_info = '$_POST[info_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Nomor", "text", "nomor", "nomor", "Nomor", $data['nomor_telp'], "form-control", "", "");
    echo '<div class="form-group">
                <label>Alamat</label>
                <textarea type="text" name="alamat" class="form-control" id="alamat" rows=7>'.$data['alamat'].'</textarea>
            </div>';
    echo form("Link Instagram", "text", "ig", "ig", "Link Instagram", $data['link_ig'], "form-control", "", "");
    echo form("Link Facebook", "text", "fb", "fb", "Link Facebook", $data['link_fb'], "form-control", "", "");
    echo form("Link Website", "text", "website", "website", "Link Website", $data['link_website'], "form-control", "", "");
    echo hidden_form("id", "id", $data['id_info']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $ig = $_POST['ig'];
    $fb = $_POST['fb'];
    $website = $_POST['website'];
    $sql = mysqli_query($mysqli, "UPDATE info SET nomor_telp = '$nomor', alamat = '$alamat', link_ig = '$ig', link_fb = '$fb', link_website = '$website' WHERE id_info = '$id'");
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM info WHERE id_info = '$_GET[hapus]'");
}

?>
                  
            