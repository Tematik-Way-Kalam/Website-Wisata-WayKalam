<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM penghargaan");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        $sql = mysqli_query($mysqli, "SELECT * FROM penghargaan_ld");
        $res = array();
        while ($row_ld = mysqli_fetch_assoc($sql)) {
            $res[] = $row_ld['id_penghargaan'];
        }
        while ($row = mysqli_fetch_array($query)){
            echo "<tr>
                    <td>".$no."</td>";
                    if($row['gambar'] == ''){
                        echo "<td></td>";
                    }else{
                        echo "<td><img src = '../gambar_penghargaan/".$row['gambar']."' width='70px' height='70px' alt='Foto Error'/></td>";
                    }
            echo    "<td>".$row['headline']."</td>
                    <td>".$row['deskripsi']."</td>
                    <td>
                    <a href='#' onclick='form_edit(".$row['id_penghargaan'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>";
                    if(!in_array($row['id_penghargaan'], $res)){
                        echo "<a href='#' onclick='form_delete(".$row['id_penghargaan'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>";
                    }
            echo    "</td>
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
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_penghargaan/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO penghargaan (gambar, headline, deskripsi) VALUES ('$nama_file', '$nama', '$deskripsi')");
}

if(isset($_POST['penghargaan_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM penghargaan WHERE id_penghargaan = '$_POST[penghargaan_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Gambar", "../gambar_penghargaan/", $data['gambar'], "70px", "70px", "file", 'gambar', 'gambar', "Gambar", "image/*");
    echo form("Nama", "text", "nama", "nama", "Nama", $data['headline'], "form-control", '', "");
    echo '<div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7>'.$data['deskripsi'].'</textarea>
        </div>';
    echo hidden_form("id", "id", $data['id_penghargaan']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_penghargaan/".$nama_file;
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE penghargaan SET headline = '$nama', deskripsi = '$deskripsi' WHERE id_penghargaan = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE penghargaan SET gambar = '$nama_file', headline = '$nama', deskripsi = '$deskripsi' WHERE id_penghargaan = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM penghargaan WHERE id_penghargaan = '$_GET[hapus]'");
}

?>
                  
            