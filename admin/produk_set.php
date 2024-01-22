<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM produk a INNER JOIN wisata b ON a.id_wisata = b.id_wisata");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        if($_SESSION['role'] == 'superadmin'){
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>".$no."</td>";
                        if($row['gambar'] == ''){
                            echo "<td></td>";
                        }else{
                            echo "<td><img src = '../gambar_produk/".$row['gambar_produk']."' width='70px' height='70px' alt='Gambar Error'/></td>";
                        }
                echo    "<td>".$row['nama_produk']."</td>
                        <td>".$row['headline']."</td>
                        <td>
                            <a href='#' onclick='form_edit(".$row['id_produk'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                            <a href='#' onclick='form_delete(".$row['id_produk'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                        </td>
                    </tr>";
                $no++;
            }
        }else{
            while ($row = mysqli_fetch_array($query)) {
               if($_SESSION['role'] == $row['headline']){
                    $tr = "p";
                    echo "<tr>
                            <td>".$no."</td>";
                            if($row['gambar'] == ''){
                                echo "<td></td>";
                            }else{
                                echo "<td><img src = '../gambar_produk/".$row['gambar_produk']."' width='70px' height='70px' alt='Gambar Error'/></td>";
                            }
                    echo    "<td>".$row['nama_produk']."</td>
                            <td>".$row['headline']."</td>
                            <td>
                                <a href='#' onclick='form_edit(".$row['id_produk'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                                <a href='#' onclick='form_delete(".$row['id_produk'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
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
                <td>-</td>   
        </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nama_produk = $_POST['nama_produk'];
    $wisata = $_POST['wisata'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_produk/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO produk (gambar_produk, nama_produk, id_wisata) VALUES ('$nama_file', '$nama_produk', '$wisata')");
}

if(isset($_POST['produk_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM produk a INNER JOIN wisata b ON a.id_wisata = b.id_wisata WHERE id_produk = '$_POST[produk_id]'");
    $data = mysqli_fetch_array($sql);
    echo form_file_edit("Upload Gambar", "../gambar_produk/", $data['gambar_produk'], "70px", "70px", "file", 'gambar', 'gambar', "Gambar", "image/*");
    echo form("Nama Produk", "text", "nama_produk", "nama_produk", "Nama Produk", $data['nama_produk'], "form-control", "", "");
    $sql1 = mysqli_query($mysqli, "SELECT * FROM wisata");
    $no = 1;
    $dt[0] = $data["headline"];
    $vl[0] = $data["id_wisata"];
    while($dat = mysqli_fetch_array($sql1)){
        $dt[$no] = $dat['headline'];
        $vl[$no] = $dat['id_wisata']; 
        $no++;
    }
    echo form_select("Pemilik", "form-control", "wisata", "wisata", $dt, $vl);
    echo hidden_form("id", "id", $data['id_produk']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $wisata = $_POST['wisata'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../gambar_produk/".$nama_file;
    if($nama_file == ''){ 
        $sql = mysqli_query($mysqli, "UPDATE produk SET nama_produk = '$nama_produk', id_wisata = '$wisata' WHERE id_produk = '$id'");
    }else{
        move_uploaded_file($tmp_file, $path);
        $sql = mysqli_query($mysqli, "UPDATE produk SET gambar_produk = '$nama_file', nama_produk = '$nama_produk', id_wisata = '$wisata' WHERE id_produk = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk = '$_GET[hapus]'");
}

?>
                  
            