<?php
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Logo.svg" type="image/x-icon">

    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@0.0.6/dist/full.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Map Interaktif | Way Kalam</title>

    <style>
        nav {
            background-color: white !important;
        }

        nav #nav-menu {
            color: black !important;
        }
        #navbar-default a.active {
            color: #132758;
            background-color: #00A693 !important;
        }
    </style>
</head>
<?php
    if(!isset($_GET['kategori'])){
        ?>
            <script>
                window.location.href = "mapInteraktif.php";
            </script>
        <?php
    }else{
        if($_GET['kategori'] == 'Wisata'){
            $gmbr = "./images/icon-wisata.svg";
        }elseif($_GET['kategori'] == 'UMKM'){
            $gmbr = "./images/icon-umkm.svg";
        }elseif($_GET['kategori'] == 'Home Stay'){
            $gmbr = "./images/icon-homestay.svg";
        }elseif($_GET['kategori'] == 'Peternakan'){
            $gmbr = "./images/icon-peternakan.svg";
        }elseif($_GET['kategori'] == 'Warung/Toko'){
            $gmbr = "./images/icon-warung.svg";
        }
    }
        $current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
<body class="bg-[#ACC4FF] overflow-x-hidden">
    <section class="flex pt-28 md:pt-14 flex-col-reverse md:flex-row">
        <div class="md:max-w-96 bg-[#D6F2FF] p-6">
            <form class="pt-6 md:pt-16", action=<?php echo "filterMapInteraktif.php?kategori=".$_GET['kategori']?> method="POST">
                <div class="flex">
                    <div class="relative w-full">
                        <input type="text" name="search" id="search-dropdown" class="block py-3 px-6 w-full z-20 text-gray-900 bg-white rounded-lg shadow-md shadow-gray-200 focus:ring-blue-500 focus:border-blue-500 font-plusJakarta" placeholder="Cari Tujuan ..." required>
                        <button type="submit" class="absolute top-0 end-0 py-3 px-6 font-medium h-full text-[#132758] rounded-r-lg overflow-hidden hover:bg-[#132758] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Cari</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="my-6 bg-white rounded-lg shadow-md shadow-gray-200">
                <div class="p-6 flex justify-between">
                    <a href="mapInteraktif.php" class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-semua.svg" alt="">
                        <p class="font-plusJakarta">Semua</p>
                    </a>
                    <a href="filterMapInteraktif.php?kategori=Wisata" class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-wisata.svg" alt="">
                        <p class="font-plusJakarta">Wisata</p>
                    </a>
                    <a href="filterMapInteraktif.php?kategori=UMKM" class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-umkm.svg" alt="">
                        <p class="font-plusJakarta">UMKM</p>
                    </a>
                </div>
                <div class="p-6 flex justify-between">
                    <a href="filterMapInteraktif.php?kategori=Home Stay" class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-homestay.svg" alt="">
                        <p class="font-plusJakarta">Homestay</p>
                    </a>
                    <a href="filterMapInteraktif.php?kategori=Peternakan" class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-peternakan.svg" alt="">
                        <p class="font-plusJakarta">Peternakan</p>
                    </a>
                    <a href="filterMapInteraktif.php?kategori=Warung/Toko" class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-warung.svg" alt="">
                        <p class="font-plusJakarta">Warung</p>
                    </a>
                </div>
            </div>

            <div class="py-6">
                <div href="" class="flex items-center justify-center py-4 px-8 text-white bg-[#7CDBF0] rounded-lg md:p-y-3 md:px-6">
                    <p class="flex items-center space-x-2 text-[#132758] font-bold font-plusJakarta">Filter Aktif: <?php echo $_GET['kategori']?></p>
                    <img src=<?php echo $gmbr?> alt="wisata" class="h-5 px-2 filter invert-1">
            </div>
            </div>

            <div class="space-y-6">
                <?php
                    $sql = mysqli_query($mysqli, "SELECT * FROM wisata a INNER JOIN lokasi b ON a.id_wisata = b.id_wisata WHERE a.kategori = '$_GET[kategori]' ");
                    if(isset($_POST['search'])){
                        while($data = mysqli_fetch_array($sql)){
                            if(Search($_POST['search'], $data['headline'])){
                            ?>
                            <a href=<?php echo "./detailMapInteraktif.php?ket=".$data['id_wisata']?> class="max-h-32 min-h-32 shadow-md shadow-gray-200 flex bg-white rounded-lg overflow-hidden">
                                <div class="h-32 min-w-28">
                                    <img src=<?php echo "./gambar_lokasi/".$data['gambar_lokasi']?> alt="Air Terjun Way Kalam" class="h-full object-cover" />
                                </div>
                                <div class="p-3 w-96 flex flex-col items-start justify-around">
                                    <h2 class="text-[14px] font-bold font-plusJakarta text-black"><?php echo $data['headline']?></h2>
                                    <p class="font-plusJakarta"><?php echo $_GET['kategori']?></p>
                                    <div class="space-x-2">
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                        }
                    }else{
                        while($data = mysqli_fetch_array($sql)){
                            ?>
                            <a href=<?php echo "./detailMapInteraktif.php?ket=".$data['id_wisata']?> class="max-h-32 min-h-32 shadow-md shadow-gray-200 flex bg-white rounded-lg overflow-hidden">
                                <div class="h-32 min-w-28">
                                    <img src=<?php echo "./gambar_lokasi/".$data['gambar_lokasi']?> alt="Air Terjun Way Kalam" class="h-full object-cover" />
                                </div>
                                <div class="p-3 w-96 flex flex-col items-start justify-around">
                                    <h2 class="text-[14px] font-bold font-plusJakarta text-black"><?php echo $data['headline']?></h2>
                                    <p class="font-plusJakarta"><?php echo $_GET['kategori']?></p>
                                    <div class="space-x-2">
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                        <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                    }
                ?>
            </div>


        </div>
        <div class="w-full md:pt-14">
            <img src="./images/map.svg" alt="" class="w-full">
        </div>
    </section>

    <?php include "footer.php"?>
</body>

</html>