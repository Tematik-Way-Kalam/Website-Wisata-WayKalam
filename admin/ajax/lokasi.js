$(document).ready(function(){
    app = {
        show: function(){
            $("tbody").load('lokasi_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })		
        }
    }
    app.show()
})

function form_edit(id){
    app = {
        show: function(){  
            $("#form").load('lokasi_set.php', {lokasi_id: id}, function(response){
                $("#form").html(response);
            })		
        }
    }
    app.show()
}

function edit(){
    var formDat = new FormData($( "#lokasiedit" )[0]);
    $.ajax({
        type: 'POST',
        url: "lokasi_set.php?type=edit",
        data: formDat,
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false,
        success: function() {
            $("tbody").load('lokasi_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        },
        error: function(){
            alert("error");
        }
    });
    
}
