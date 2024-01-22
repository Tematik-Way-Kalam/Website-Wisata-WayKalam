<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM lokasi a INNER JOIN wisata b ON a.id_wisata = b.id_wisata");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        if($_SESSION['role'] == 'superadmin'){
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>".$no."</td>";
                echo    "<td>".$row['kategori']."</td>";
                        if($row['gambar'] == ''){
                            echo "<td></td>";
                        }else{
                            echo "<td><img src = '../gambar_lokasi/".$row['gambar_lokasi']."' width='70px' height='70px' alt='Gambar Error'/></td>";
                        }
                echo    "<td>".$row['headline']."</td>
                        <td>".$row['deskripsi_lokasi']."</td>
                        <td>
                            <a href='#' onclick='form_edit(".$row['id_lokasi'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                        </td>
                    </tr>";
                $no++;
            }
        }else{
            while ($row = mysqli_fetch_array($query)) {
                if($_SESSION['role'] == $row['headline']){
                    echo "<tr>
                            <td>".$no."</td>";
                    echo    "<td>".$row['kategori']."</td>";
                            if($row['gambar'] == ''){
                                echo "<td></td>";
                            }else{
                                echo "<td><img src = '../gambar_lokasi/".$row['gambar_lokasi']."' width='70px' height='70px' alt='Gambar Error'/></td>";
                            }
                    echo    "<td>".$row['headline']."</td>
                            <td>".$row['deskripsi_lokasi']."</td>
                            <td>
                                <a href='#' onclick='form_edit(".$row['id_lokasi'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                            </td>
                        </tr>";
                    $no++;
                }
            }
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
    $wisata = $_POST['wisata'];
    $deskripsi_lokasi = $_POST['deskripsi_lokasi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_lokasi/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO lokasi (gambar_lokasi, id_wisata, deskripsi_lokasi) VALUES ('$nama_file', '$wisata', '$deskripsi_lokasi')");
}

if(isset($_POST['lokasi_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM lokasi a INNER JOIN wisata b ON a.id_wisata = b.id_wisata WHERE id_lokasi = '$_POST[lokasi_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Gambar", "../gambar_lokasi/", $data['gambar_lokasi'], "70px", "70px", "file", 'gambar', 'gambar', "Gambar", "image/*");
    echo '<div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" name="deskripsi_lokasi" class="form-control" id="deskripsi_lokasi" rows=7>'.$data['deskripsi_lokasi'].'</textarea>
        </div>';
    echo hidden_form("id", "id", $data['id_lokasi']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $wisata = $_POST['wisata'];
    $deskripsi_lokasi = $_POST['deskripsi_lokasi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_lokasi/".$nama_file;
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE lokasi SET deskripsi_lokasi = '$deskripsi_lokasi' WHERE id_lokasi = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE lokasi SET gambar_lokasi = '$nama_file', deskripsi_lokasi = '$deskripsi_lokasi' WHERE id_lokasi = '$id'");
    }
}
?>
                  
            