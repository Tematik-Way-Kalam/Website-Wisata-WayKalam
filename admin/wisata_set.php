<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM wisata");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        $sql = mysqli_query($mysqli, "SELECT * FROM lokasi");
        $res = array();
        while ($row_ld = mysqli_fetch_assoc($sql)) {
            $res[] = $row_ld['id_wisata'];
        }
        if($_SESSION['role'] == 'superadmin'){
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>".$no."</td>";
                echo    "<td>".$row['kategori']."</td>";
                        if($row['gambar'] == ''){
                            echo "<td></td>";
                        }else{
                            echo "<td><img src = '../gambar_tempat/".$row['gambar']."' width='70px' height='70px' alt='Foto Error'/></td>";
                        }
                echo    "<td>".$row['headline']."</td>
                        <td>".$row['deskripsi']."</td>
                        <td>
                        <a href='#' onclick='form_edit(".$row['id_wisata'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>";
                        if(!in_array($row['id_wisata'], $res)){
                            echo "<a href='#' onclick='form_delete(".$row['id_wisata'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>";
                        }
                echo    "</td>
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
                                echo "<td><img src = '../gambar_tempat/".$row['gambar']."' width='70px' height='70px' alt='Foto Error'/></td>";
                            }
                    echo    "<td>".$row['headline']."</td>
                            <td>".$row['deskripsi']."</td>
                            <td>
                            <a href='#' onclick='form_edit(".$row['id_wisata'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
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
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_tempat/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO wisata (kategori, gambar, headline, deskripsi) VALUES ('$kategori', '$nama_file', '$nama', '$deskripsi')");
}

if(isset($_POST['wisata_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM wisata WHERE id_wisata = '$_POST[wisata_id]'");
    $data = mysqli_fetch_array($sql);
    $vl[0] = $data['kategori'];
    $n = 1;
    $vls = array("Wisata", "UMKM", "Home Stay", "Peternakan", "Warung/Toko", "Lainnya");
    foreach ($vls as $v){
        $vl[$n] = $v;
        $n++;
    }
    echo form_select("Kategori", "form-control", "kategori", "kategori", $vl, $vl);
    echo form_file_edit("Upload Gambar", "../gambar_tempat/", $data['gambar'], "70px", "70px", "file", 'gambar', 'gambar', "Gambar", "image/*");
    echo form("Nama", "text", "nama", "nama", "Nama", $data['headline'], "form-control", '', "");
    echo '<div class="form-group">
            <label>Deskripsi</label>
            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows=7>'.$data['deskripsi'].'</textarea>
        </div>';
    echo hidden_form("id", "id", $data['id_wisata']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_tempat/".$nama_file;
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE wisata SET kategori = '$kategori', headline = '$nama', deskripsi = '$deskripsi' WHERE id_wisata = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE wisata SET kategori = '$kategori', gambar = '$nama_file', headline = '$nama', deskripsi = '$deskripsi' WHERE id_wisata = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM wisata WHERE id_wisata = '$_GET[hapus]'");
}

?>
                  
            