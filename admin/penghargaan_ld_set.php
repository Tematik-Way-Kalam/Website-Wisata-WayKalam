<?php
ob_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM penghargaan_ld a INNER JOIN penghargaan b ON a.id_penghargaan = b.id_penghargaan");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr><td>".$no."</td>";
            echo    "<td>".$row['headline']."</td>
                    <td>
                    <a href='#' onclick='form_edit(".$row['id_p'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    </td>
                </tr>";
            $no++;
        }
    }else{
        echo "<tr>
                <td>-</td>
                <td>-</td>  
        </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $penghargaan = $_POST['penghargaan'];
    $sql = mysqli_query($mysqli, "INSERT INTO penghargaan_ld (id_penghargaan) VALUES ('$penghargaan')");
}

if(isset($_POST['penghargaan_ld_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM penghargaan_ld a INNER JOIN penghargaan b ON a.id_penghargaan = b.id_penghargaan WHERE a.id_p = '$_POST[penghargaan_ld_id]'");
    $data = mysqli_fetch_array($sql);
    $no = 1;
    $dt[0] = $data['headline'];
    $vl[0] = $data['id_penghargaan'];
    $sql1 = mysqli_query($mysqli, "SELECT * FROM penghargaan");
    while($dat = mysqli_fetch_array($sql1)){
      $dt[$no] = $dat['headline'];
      $vl[$no] = $dat['id_penghargaan']; 
      $no++;
    }
    echo form_select("Nama", "form-control", "penghargaan", "penghargaan", $dt, $vl);
    echo hidden_form("id", "id", $data['id_p']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $penghargaan = $_POST['penghargaan'];
    $sql = mysqli_query($mysqli, "UPDATE penghargaan_ld SET id_penghargaan = '$penghargaan' WHERE id_p = '$id'");
}

?>
                  
            