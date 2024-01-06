<?php
	include "header.php";
	include "sidebar.php";
	echo '<div id="konten"></div>';
?>
<script>
    $(document).ready(function(){
        $('#konten').load('dashboard.php');
        $('#menu a').click(function(){
        	var hal = $(this).attr('href');
            $('#konten').load(hal);
            return false;
        });
        $('#menu a').click(function(){
        	var hal = $(this).attr('href');
            $('#konten').load(hal);
            return false;
        });
    });
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php include "footer.php"; ?>