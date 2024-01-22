<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM contact a INNER JOIN lokasi b ON a.id_lokasi = b.id_lokasi INNER JOIN wisata c ON b.id_wisata = c.id_wisata");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        if($_SESSION['role'] == 'superadmin'){
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>".$no."</td>";
                echo    "<td>".$row['contact']."</td>
                        <td>".$row['link']."</td>
                        <td>".$row['headline']."</td>";
                echo    "<td>
                            <a href='#' onclick='form_edit(".$row['id_contact'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                            <a href='#' onclick='form_delete(".$row['id_contact'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                        </td>
                    </tr>";
                $no++;
            }
        }else{
            while ($row = mysqli_fetch_array($query)) {
                if($_SESSION['role'] == $row['headline']){
                    $tr = "P";
                    echo "<tr>
                            <td>".$no."</td>";
                    echo    "<td>".$row['contact']."</td>
                            <td>".$row['link']."</td>
                            <td>".$row['headline']."</td>";
                    echo    "<td>
                                <a href='#' onclick='form_edit(".$row['id_contact'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                                <a href='#' onclick='form_delete(".$row['id_contact'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
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
    $contact = $_POST['contact'];
    $link = $_POST['link'];
    $kategori = $_POST['kategori'];
    $sql = mysqli_query($mysqli, "INSERT INTO contact (contact, link, id_lokasi) VALUES ('$contact', '$link', '$kategori')");
}

if(isset($_POST['contact_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM contact a INNER JOIN lokasi b ON a.id_lokasi = b.id_lokasi INNER JOIN wisata c ON b.id_wisata = c.id_wisata WHERE id_contact = '$_POST[contact_id]'");
    $data = mysqli_fetch_array($sql);
    $vl[0] = $data['contact'];
    $n = 1;
    $vls = array("Instagram", "Facebook", "WhatsApp", "Telegram");
    foreach($vls as $v) {
        $vl[$n] = $v;
        $n++;
    }
    echo form_select("Contact", "form-control", "contact", "contact", $vl, $vl);
    echo form("Link", "text", "link", "link", "Link", $data['link'], "form-control", '', "");
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
    echo hidden_form("id", "id", $data['id_contact']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $contact = $_POST['contact'];
    $link = $_POST['link'];
    $kategori = $_POST['kategori'];
    $sql = mysqli_query($mysqli, "UPDATE contact SET contact = '$contact', link = '$link', id_lokasi = '$kategori' WHERE id_contact = '$id'");
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM contact WHERE id_contact = '$_GET[hapus]'");
}

?>
                  
            