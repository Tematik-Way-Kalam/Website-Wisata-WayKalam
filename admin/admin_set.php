<?php
ob_start();
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
            echo    "<td>".$row['username']."</td>";
                    if($row['kategori_admin'] == 'superadmin'){
                        echo "<td>Admin Utama</td>";
                    }else{
                        $sql = mysqli_query($mysqli, "SELECT * FROM wisata WHERE id_wisata = '$row[id_wisata]'");
                        $wis = mysqli_fetch_array($sql);
                        echo "<td>Admin ".$wis['headline']."</td>";
                    }
            echo "<td>";
                    if($_SESSION['role'] == 'superadmin'){
                        if($row['kategori_admin'] == 'superadmin'){
                            echo "<a href='#' onclick='form_edit(".$row['id_admin'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>";
                        }else{
                            echo "<a href='#' onclick='form_edit(".$row['id_admin'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                            <a href='#' onclick='form_delete(".$row['id_admin'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>";
                        } 
                    }else{
                        if($row['kategori_admin'] != 'superadmin'){
                            $sql1 = mysqli_query($mysqli, "SELECT * FROM wisata WHERE id_wisata = '$row[id_wisata]'");
                            $wi = mysqli_fetch_array($sql1);
                            if($wi['headline'] == $_SESSION['role']){
                                echo "<a href='#' onclick='form_edit(".$row['id_admin'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>";
                            }
                        }
                     } 
            echo "</td>
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
    $kategori = $_POST['kategori'];
    $password = md5($password);
    $sql = mysqli_query($mysqli, "INSERT INTO admin (username, password, kategori_admin, id_wisata) VALUES ('$username', '$password', 'admin', '$kategori')");
}

if(isset($_POST['admin_id'])){
    if($_SESSION['role'] == 'superadmin'){
        $sql = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin = '$_POST[admin_id]'");
        $sql1 = mysqli_query($mysqli, "SELECT * FROM admin a INNER JOIN wisata b ON a.id_wisata = b.id_wisata WHERE id_admin = '$_POST[admin_id]'");
    }else{
        $sql = mysqli_query($mysqli, "SELECT * FROM admin a INNER JOIN wisata b ON a.id_wisata = b.id_wisata WHERE id_admin = '$_POST[admin_id]'");
    }
    $data = mysqli_fetch_array($sql);
    echo form("Username", "text", "username", "username", "Username", $data['username'], "form-control", "", "");
    if($_SESSION['role'] == 'superadmin' && $data['kategori_admin'] == 'admin'){
        $data = mysqli_fetch_array($sql1);
        $sql1 = mysqli_query($mysqli, "SELECT * FROM wisata");
        $no = 1;
        $dt[0] = 'Admin '.$data['headline'];
        $vl[0] = $data['id_wisata'];
        while($dat = mysqli_fetch_array($sql1)){
            $dt[$no] ='Admin '.$dat['headline'];
            $vl[$no] = $dat['id_wisata']; 
            $no++;
        }
        echo form_select("Kategori", "form-control", "kategori", "kategori", $dt, $vl);
    }
    echo form("Password", "text", "password", "password", "Password", "", "form-control", "", "");
    echo hidden_form("id", "id", $data['id_admin']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($password == ""){
        if($_SESSION['role'] == 'superadmin'){
            $kategori = $_POST['kategori'];
            $sql = mysqli_query($mysqli, "UPDATE admin SET username = '$username', id_wisata = '$kategori' WHERE id_admin = '$id'");
        }else{
            $sql = mysqli_query($mysqli, "UPDATE admin SET username = '$username' WHERE id_admin = '$id'");
        }
    }else{
        if($_SESSION['role'] == 'superadmin'){
            $kategori = $_POST['kategori'];
            $password = md5($password);
            $sql = mysqli_query($mysqli, "UPDATE admin SET username = '$username', password = '$password', id_wisata = '$kategori' WHERE id_admin = '$id'");
        }else{
            $password = md5($password);
            $sql = mysqli_query($mysqli, "UPDATE admin SET username = '$username', password = '$password' WHERE id_admin = '$id'");
        }
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM admin WHERE id_admin = '$_GET[hapus]'");
}

?>
                  
            