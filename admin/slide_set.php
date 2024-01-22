<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM slide");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
                    if($row['gambar'] == ''){
                        echo "<td></td>";
                    }else{
                        echo "<td><img src = '../gambar_slide/".$row['gambar']."' width='70px' height='70px' alt='Foto Error'/></td>";
                    }
            echo    "<td>".$row['headline']."</td>
                    <td>".$row['deskripsi']."</td>
                    <td>
                    <a href='#' onclick='form_edit(".$row['id_slide'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_slide'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
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

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_slide/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO slide (gambar, headline, deskripsi) VALUES ('$nama_file', '$nama', '$deskripsi')");
}

if(isset($_POST['slide_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM slide WHERE id_slide = '$_POST[slide_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Gambar", "../gambar_slide/", $data['gambar'], "70px", "70px", "file", 'gambar', 'gambar', "Gambar", "image/*");
    echo form("Headline", "text", "nama", "nama", "Headline", $data['headline'], "form-control", '', "");
    echo '<div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7>'.$data['deskripsi'].'</textarea>
        </div>';
    echo hidden_form("id", "id", $data['id_slide']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_slide/".$nama_file;
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE slide SET headline = '$nama', deskripsi = '$deskripsi' WHERE id_slide = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE slide SET gambar = '$nama_file', headline = '$nama', deskripsi = '$deskripsi' WHERE id_slide = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM slide WHERE id_slide = '$_GET[hapus]'");
}

?>
                  
            