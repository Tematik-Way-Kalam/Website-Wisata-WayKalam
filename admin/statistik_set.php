<?php
ob_start();
include "koneksi.php";

function getYearsFromDatabase($mysqli) {
    $query = mysqli_query($mysqli, "SELECT DISTINCT YEAR(tanggal) AS tahun FROM statistik");
    $years = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $years[] = $row['tahun'];
    }
    return $years;
}

if (isset($_POST['type']) && $_POST['type'] == 'view') {
    $years = getYearsFromDatabase($mysqli);
    if (!empty($years)) {
        $query = mysqli_query($mysqli, "SELECT tanggal, hari, jumlah_pengunjung_air_terjun FROM statistik");
        $csvFile = 'data.csv';
        $file = fopen($csvFile, 'w');
        $header = array('tanggal', 'hari', 'jumlah_pengunjung');
        fputcsv($file, $header);
        while ($row = mysqli_fetch_assoc($query)) {
            fputcsv($file, $row);
        }
        fclose($file);

        $pythonScript = "visualisasi.py";
        foreach ($years as $tahun) {
            $command = "python $pythonScript $tahun";
            $output = shell_exec($command);
        }
        foreach ($years as $tahun) {
            echo '<tr>
                    <td>'.$tahun.'</td>
                    <td><img src="plot_rata_rata_perhari_' . $tahun . '.png" alt="Matplotlib Plot"></td>
                    <td><img src="tren_bulanan_' . $tahun . '.png" alt="Matplotlib Plot"></td>  
                </tr>';
        }
    } else {
        echo "<tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>  
            </tr>";
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $timestamp = strtotime($tanggal);
    $hari = date('l', $timestamp);
    $bulan = date('F', $timestamp);
    $sql = mysqli_query($mysqli, "SELECT * FROM statistik");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_array($sql)){
            if($row['tanggal'] == $tanggal){
                $jumlah = $jumlah + $row['jumlah_pengunjung_air_terjun'];
                $sql = mysqli_query($mysqli, "UPDATE statistik SET jumlah_pengunjung_air_terjun = '$jumlah' WHERE id_statistik = '$row[id_statistik]'");
            }
        }
    }
    $sql = mysqli_query($mysqli, "INSERT INTO statistik (tanggal, hari, bulan, jumlah_pengunjung_air_terjun) VALUES ('$tanggal', '$hari', '$bulan', '$jumlah')");
}
?>