<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM video");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
            echo    "<td>".$row['link']."</td>
                    <td>
                    <a href='#' onclick='form_edit(".$row['id_video'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    </td>
                </tr>";
            $no++;
        }
    }else{
        echo "<tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>     
        </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $link = $_POST['link'];
    $sql = mysqli_query($mysqli, "INSERT INTO video (link) VALUES ('$link')");
}

if(isset($_POST['video_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM video WHERE id_video = '$_POST[video_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Link", "text", "link", "link", "Link", $data['link'], "form-control", '', "");
    echo hidden_form("id", "id", $data['id_video']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $link = $_POST['link'];
    $sql = mysqli_query($mysqli, "UPDATE video SET link = '$link' WHERE id_video = '$id'");
}

?>
                  
            