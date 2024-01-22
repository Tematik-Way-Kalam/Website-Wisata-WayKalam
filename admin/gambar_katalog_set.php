<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM gambar_katalog a INNER JOIN lokasi b ON a.id_lokasi = b.id_lokasi INNER JOIN wisata c ON b.id_wisata = c.id_wisata");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        if($_SESSION['role'] == 'superadmin'){
            while ($row = mysqli_fetch_array($query)){
                echo "<tr><td>".$no."</td>
                    <td><img src = '../gambar_katalog/".$row['gambar_katalog']."' width='70px' height='70px'/></td>
                    <td>".$row['headline']."</td>";
                echo "
                    <td>
                        <a href='#' onclick='form_edit(".$row['id_gambar_katalog'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                        <a href='#' onclick='form_delete(".$row['id_gambar_katalog'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                    </td>
                    </tr>";
                $no++;
            }
        }else{
            while ($row = mysqli_fetch_array($query)){
                if($_SESSION['role'] == $row['headline']){
                    $tr = "p";
                    echo "<tr><td>".$no."</td>
                        <td><img src = '../gambar_katalog/".$row['gambar_katalog']."' width='70px' height='70px'/></td>
                        <td>".$row['headline']."</td>";
                    echo "
                        <td>
                            <a href='#' onclick='form_edit(".$row['id_gambar_katalog'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                            <a href='#' onclick='form_delete(".$row['id_gambar_katalog'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                        </td>
                        </tr>";
                    $no++;
                }else{
                    if(!isset($tr)){
                        $td = "<tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>   
                                    <td>-</td>   
                            </tr>";
                    }
                }
            }
            if(!isset($tr)){
                echo $td;
            }
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
    $kategori = $_POST['kategori'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_katalog/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO gambar_katalog (gambar_katalog, id_lokasi) VALUES ('$nama_file', '$kategori')");
}

if(isset($_POST['gambar_katalog_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM gambar_katalog a INNER JOIN lokasi b ON a.id_lokasi = b.id_lokasi INNER JOIN wisata c ON b.id_wisata = c.id_wisata WHERE id_gambar_katalog = '$_POST[gambar_katalog_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Gambar", "../gambar_katalog/", $data['gambar_katalog'], "70px", "70px", "file", 'gambar', 'gambar', "Gambar", "image/*");
    $sql1 = mysqli_query($mysqli, "SELECT * FROM lokasi a INNER JOIN wisata b ON a.id_wisata = b.id_wisata");
    $no = 1;
    $dt[0] =$data['headline'];
    $vl[0] =$data['id_lokasi'];
    while($dat = mysqli_fetch_array($sql1)){
        $dt[$no] = $dat['headline'];
        $vl[$no] = $dat['id_lokasi']; 
        $no++;
    }
    echo form_select("Lokasi", "form-control", "kategori", "kategori", $dt, $vl);
    echo hidden_form("id", "id", $data['id_gambar_katalog']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama_file     = $_FILES['gambar']['name'];
    $ukuran_file   = $_FILES['gambar']['size'];
    $tipe_file     = $_FILES['gambar']['type'];
    $tmp_file      = $_FILES['gambar']['tmp_name'];
    $path          = "../gambar_katalog/".$nama_file;
        
    if($nama_file != ''){
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE gambar_katalog SET gambar_katalog = '$nama_file', id_lokasi = '$kategori' WHERE id_gambar_katalog = '$id'");
    }else{
        $sql = mysqli_query($mysqli, "UPDATE gambar_katalog SET id_lokasi = '$kategori' WHERE id_gambar_katalog = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM gambar_katalog WHERE id_gambar_katalog = '$_GET[hapus]'");
}

?>
                  
            