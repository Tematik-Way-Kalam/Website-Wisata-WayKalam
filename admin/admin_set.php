<?php
ob_start();
session_start();
include "koneksi.php";
include "function.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM admin");
    $no = 1;
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no."</td>";
            echo    "<td>".$row['username']."</td>
                    <td>";
                     if($row['role'] == 'superadmin'){
                        if($_SESSION['role'] == 'superadmin'){
                            echo "<a href='#' onclick='form_edit(".$row['id_admin'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>";
                        }
                    }else{
                        echo "<a href='#' onclick='form_edit(".$row['id_admin'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                        <a href='#' onclick='form_delete(".$row['id_admin'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>";
                     } 
                    "</td>
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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = mysqli_query($mysqli, "INSERT INTO admin (username, password, role) VALUES ('$username', '$password', 'admin')");
}

if(isset($_POST['admin_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin = '$_POST[admin_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Username", "text", "username", "username", "Username", $data['username'], "form-control", '', "");
    echo form("Password", "password", "password", "password", "Password", '', 'form-control', '', "");
    echo hidden_form("id", "id", $data['id_admin']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    if($password == ''){
        $sql = mysqli_query($mysqli, "UPDATE admin SET username = '$username', WHERE id_admin = '$id'");
    }else{
        $password = md5($password);
        $sql = mysqli_query($mysqli, "UPDATE admin SET username = '$username', password = '$password' WHERE id_admin = '$id'");
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM admin WHERE id_admin = '$_GET[hapus]'");
}

?>
                  
            