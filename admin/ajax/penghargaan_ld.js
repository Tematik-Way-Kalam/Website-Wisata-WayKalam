$(document).ready(function(){
    app = {
        show: function(){
            $("tbody").load('penghargaan_ld_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })		
        }
    }
    app.show()
})

function tambah(){
    var formData = new FormData($( "#penghargaan_ldtambah" )[0]);
    $.ajax({
        type: 'POST',
        url: "penghargaan_ld_set.php?type=tambah",
        data: formData,
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false,
        success: function() {
            $("tbody").load('penghargaan_ld_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        }
    });
}

function form_edit(id){
    app = {
        show: function(){  
            $("#form").load('penghargaan_ld_set.php', {penghargaan_ld_id: id}, function(response){
                $("#form").html(response);
            })		
        }
    }
    app.show()
}

function edit(){
    var formDat = new FormData($( "#penghargaan_ldedit" )[0]);
    $.ajax({
        type: 'POST',
        url: "penghargaan_ld_set.php?type=edit",
        data: formDat,
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false,
        success: function() {
            $("tbody").load('penghargaan_ld_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        },
        error: function(){
            alert("error");
        }
    });
    
}

function form_delete(id){
    if(confirm("Yakin Akan Hapus Data ?")){
        $.ajax({
            type: 'GET',
            url: "penghargaan_ld_set.php?hapus="+id,
            data: id,
            success: function() {
                $("tbody").load('penghargaan_ld_set.php', {type: 'view'}, function(response){
                    $("tbody").html(response);
                })	
            }
        });
    }
}