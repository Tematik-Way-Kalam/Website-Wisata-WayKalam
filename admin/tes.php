<?php
$pythonScript = "tes.py";
$command = "python $pythonScript";
$output = shell_exec($command);

echo '<img src="plot.png" alt="Matplotlib Plot">';
?>
