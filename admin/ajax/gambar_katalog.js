$(document).ready(function(){
    app = {
        show: function(){
            $("tbody").load('gambar_katalog_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })		
        }
    }
    app.show()
})

function tambah(){
    // var data = $('.form-gambar_katalog').serialize();
    var formData = new FormData($( "#gambar_katalogtambah" )[0]);
    $.ajax({
        type: 'POST',
        url: "gambar_katalog_set.php?type=tambah",
        data: formData,
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false,
        success: function() {
            $("tbody").load('gambar_katalog_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        }
    });
}

function form_edit(id){
    app = {
        show: function(){  
            $("#form").load('gambar_katalog_set.php', {gambar_katalog_id: id}, function(response){
                $("#form").html(response);
            })		
        }
    }
    app.show()
}

function edit(){
    var formDat = new FormData($( "#gambar_katalogedit" )[0]);
    $.ajax({
        type: 'POST',
        url: "gambar_katalog_set.php?type=edit",
        data: formDat,
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false,
        success: function() {
            $("tbody").load('gambar_katalog_set.php', {type: 'view'}, function(response){
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
            url: "gambar_katalog_set.php?hapus="+id,
            data: id,
            success: function() {
                $("tbody").load('gambar_katalog_set.php', {type: 'view'}, function(response){
                    $("tbody").html(response);
                })	
            }
        });
    }
}