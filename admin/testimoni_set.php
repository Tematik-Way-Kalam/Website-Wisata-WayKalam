<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM testimoni");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
                    if($row['foto'] == ''){
                        echo "<td></td>";
                    }else{
                        echo "<td><img src = '../foto_pengomentar/".$row['foto']."' width='70px' height='70px' alt='Foto Error'/></td>";
                    }
            echo    "<td>".$row['nama']."</td>
                    <td>".$row['status']."</td>
                    <td>".$row['komen']."</td>
                    <td>
                    <a href='#' onclick='form_edit(".$row['id_testimoni'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
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
        </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $komen = $_POST['komen'];
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tipe_file = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $path = "../foto_pengomentar/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    if(!isset($nama_file)){
        $sql = mysqli_query($mysqli, "INSERT INTO testimoni (foto, nama, status, komen) VALUES ('user.png', '$nama', '$status', '$komen')");
    }else{
        $sql = mysqli_query($mysqli, "INSERT INTO testimoni (foto, nama, status, komen) VALUES ('$nama_file', '$nama', '$status', '$komen')");
    }
}

if(isset($_POST['testimoni_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM testimoni WHERE id_testimoni = '$_POST[testimoni_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Foto", "../foto_pengomentar/", $data['foto'], "70px", "70px", "file", 'foto', 'foto', "Foto", "image/*");
    echo form("Nama", "text", "nama", "nama", "Nama", $data['nama'], "form-control", '', "");
    echo form("Status", "text", "status", "status", "Status", $data['status'], "form-control", '', "");
    echo '<div class="form-group">
            <label>Komentar</label>
            <textarea type="text" name="komen" class="form-control" id="komen" rows=7>'.$data['komen'].'</textarea>
        </div>';
    echo hidden_form("id", "id", $data['id_testimoni']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $komen = $_POST['komen'];
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tipe_file = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $path = "../foto_pengomentar/".$nama_file;
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE testimoni SET nama = '$nama', status = '$status', komen = '$komen' WHERE id_testimoni = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE testimoni SET foto = '$nama_file', nama = '$nama', status = '$status', komen = '$komen' WHERE id_testimoni = '$id'");
    }
}

?>
                  
            