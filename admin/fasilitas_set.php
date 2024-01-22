<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM fasilitas a INNER JOIN lokasi b ON a.id_lokasi = b.id_lokasi INNER JOIN wisata c ON b.id_wisata = c.id_wisata");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        if($_SESSION['role'] == 'superadmin'){
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>".$no."</td>";
                echo    "<td>".$row['fasilitas']."</td>
                        <td>".$row['headline']."</td>";
                echo    "<td>
                            <a href='#' onclick='form_edit(".$row['id_fasilitas'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                            <a href='#' onclick='form_delete(".$row['id_fasilitas'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
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
                    echo    "<td>".$row['fasilitas']."</td>
                            <td>".$row['headline']."</td>";
                    echo    "<td>
                                <a href='#' onclick='form_edit(".$row['id_fasilitas'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                                <a href='#' onclick='form_delete(".$row['id_fasilitas'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
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
    $fasilitas = $_POST['fasilitas'];
    $kategori = $_POST['kategori'];
    $sql = mysqli_query($mysqli, "INSERT INTO fasilitas (fasilitas, id_lokasi) VALUES ('$fasilitas', '$kategori')");
}

if(isset($_POST['fasilitas_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM fasilitas a INNER JOIN lokasi b ON a.id_lokasi = b.id_lokasi INNER JOIN wisata c ON b.id_wisata = c.id_wisata WHERE id_fasilitas = '$_POST[fasilitas_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Fasilitas", "text", "fasilitas", "fasilitas", "Fasilitas", $data['fasilitas'], "form-control", '', "");
    $sql1 = mysqli_query($mysqli, "SELECT * FROM lokasi a INNER JOIN wisata b ON a.id_wisata = b.id_wisata");
    $no = 1;
    $dt[0] =$data['headline'];
    $vl[0] =$data['id_wisata'];
    while($dat = mysqli_fetch_array($sql1)){
        $dt[$no] = $dat['headline'];
        $vl[$no] = $dat['id_lokasi']; 
        $no++;
    }
    echo form_select("Lokasi", "form-control", "kategori", "kategori", $dt, $vl);
    echo hidden_form("id", "id", $data['id_fasilitas']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $fasilitas = $_POST['fasilitas'];
    $kategori = $_POST['kategori'];
    $sql = mysqli_query($mysqli, "UPDATE fasilitas SET fasilitas = '$fasilitas', id_lokasi = '$kategori' WHERE id_fasilitas = '$id'");
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM fasilitas WHERE id_fasilitas = '$_GET[hapus]'");
}

?>
                  
            