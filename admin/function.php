<?php
session_start();
include "koneksi.php";
if(empty($_SESSION['status'])){
    ?>
    <script>
      window.location.href = "index.php";
    </script>
    <?php
}
function form($label, $type, $name, $id, $pl, $vl, $clas, $br, $req){
    $form = '<div class="form-group">
                <label>'.$label.'</label>'.$br.'
                <input type="'.$type.'" name="'.$name.'" class="'.$clas.'" id="'.$id.'" placeholder="'.$pl.'" value="'.$vl.'" '.$req.' >
            </div>';
    return $form;         
}

function hidden_form($name, $id, $vl){
    echo "<input type='hidden' name='".$name."' id='".$id."' value='".$vl."'>";
}

function form_file_edit($label, $path, $img, $w, $h, $type, $name, $id, $p, $typ){
    $form_file_edit = '<div class="form-group">
                        <label>'.$label.'</label><br>
                        <img src="'.$path.$img.'" width="'.$w.'" height="'.$h.'" />
                        <br><input type="'.$type.'" id="'.$id.'" name="'.$name.'" accept="'.$typ.'"  placeholder="'.$p.'">
                    </div>';
    return $form_file_edit;                
}

function form_select($label, $clas, $name, $id, $options, $value){
    echo '<div class="form-group">
        <label >'.$label.'</label>
        <select name="'.$name.'" id="'.$id.'" class="'.$clas.'" required>';
    for($i=0; $i<count($options); $i++){
        echo '<option value="'.$value[$i].'">'.$options[$i].'</option>';
    }   
    echo '</select></div>';
}

function header_content($judul, $link){
    echo '<section class="content-header"><div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>'.$judul.'</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="halaman_admin.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="'.$link.'">'.$judul.'</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>';
}

function table($label, $t){
    echo '<table class="table table-bordered table-striped table-responsive-sm" id="dataTable" width="100%" cellspacing="0">
    <thead>';
    if($t == TRUE){
        echo '<tr><th>No</th>';
    }else{
        echo '<tr>';
    }
    foreach($label as $lb){
        echo '<th>'.$lb.'</th>';
    }    
     echo '</tr></thead>
            <tbody>
            </tbody>
        </table>';
}

function content($target, $tambah, $table, $t=TRUE){
    echo '<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
            <div class="card">';
    if($target == '' && $tambah == ''){
        echo '';
    }else{        
        echo  '<div class="card-header">
                <a href="#" data-toggle="modal" data-target="'.$target.'" class="btn btn-success btn-small ">'.$tambah.'</a>
            </div>';
    }        
    echo  '<div class="card-body">';
    echo table($table, $t); 
    echo  '</div>
            </div></div>
            </div></div>
            </section>';
}

function modal_tambah_body($idmodal, $judul, $idform){
    echo '<div class="modal fade" id="'.$idmodal.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title" id="myModalLabel">'.$judul.'</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="card card-primary">
              <form method="POST" enctype="multipart/form-data" id="'.$idform.'">
            <div class="card-body">';
}            
function modal_tambah_footer($onclik) {
    echo '</div>
        <div class="card-footer">
            <button type="buttton" data-dismiss="modal" class="btn btn-success" onclick="'.$onclik.'">Submit</button>	
        </div>
        </form>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
            </div>
            </div>
        </div>
        </div>';
}

function modal_edit($idmodal, $judl, $id, $editid){
    echo '<div class="modal fade" id="'.$idmodal.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title" id="myModalLabel">'.$judl.'</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                <form method="POST" enctype="multipart/form-data" id="'.$editid.'">
                    <div class="card-body">
                    <div id="'.$id.'"></div>
                    </div>
                    <div class="card-footer">
                        <button data-dismiss="modal" class="btn btn-primary" onclick="edit()">Submit</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
            </div>
        </div>
        </div>
    </div>';
}

// function js_table(){
//     echo '<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
//     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
//     <script>
//       $(document).ready(function() {
//     $("#dataTable").DataTable();
//     });
//     </script>';
// }

?>