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

<body class="bg-[#ACC4FF] overflow-x-hidden">
    <section class="flex pt-28 md:pt-14 flex-col-reverse md:flex-row">
        <div class="md:max-w-96 bg-[#D6F2FF] p-6">
            <form class="pt-6 md:pt-16">
                <div class="flex">
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" class="block py-3 px-6 w-full z-20 text-gray-900 bg-white rounded-lg shadow-md shadow-gray-200 focus:ring-blue-500 focus:border-blue-500 font-plusJakarta" placeholder="Cari Tujuan ..." required>
                        <button type="submit" class="absolute top-0 end-0 py-3 px-6 font-medium h-full text-[#132758] rounded-r-lg overflow-hidden hover:bg-[#132758] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Cari</span>
                        </button>
                    </div>
                </div>
            </form>
            <?php
                if(isset($_GET['ket'])){
                    $sql = mysqli_query($mysqli, "SELECT * FROM wisata a INNER JOIN lokasi b ON a.id_wisata = b.id_wisata WHERE a.id_wisata = '$_GET[ket]'");
                    $data = mysqli_fetch_array($sql);
                }else{
                    ?>
                        <script>
                            window.location.href = "mapInteraktif.php";
                        </script>
                    <?php
                }
            ?>
            <div class="carousel w-full rounded-lg">
                <div id="item1" class="carousel-item w-full">
                    <img src=<?php echo "./gambar_tempat/".$data['gambar']?> class="w-full" />
                </div>
                <!-- <div id="item2" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div>
                <div id="item3" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div>
                <div id="item4" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div> -->
            </div>
            <!-- <div class="flex justify-center w-full py-2 gap-4">
                <a href="#item1" class="btn btn-xs">1</a>
                <a href="#item2" class="btn btn-xs">2</a>
                <a href="#item3" class="btn btn-xs">3</a>
                <a href="#item4" class="btn btn-xs">4</a>
            </div> -->

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3"><?php echo $data['headline']?></h2>
                    <div class="text-justify font-plusJakarta text-black">
                        <p><?php echo $data['deskripsi_lokasi']?></p>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Fasilitas</h2>
                    <div class="text-justify">
                        <ul class="w-full space-y-2">
                            <?php
                                $sqli = mysqli_query($mysqli, "SELECT * FROM fasilitas WHERE id_lokasi = '$data[id_lokasi]'");
                                while($dat = mysqli_fetch_array($sqli)){
                                    ?>
                                    <li class="flex items-center space-x-2">
                                        <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                        <p class="hover:underline font-plusJakarta text-black"><?php echo $dat['fasilitas']?></p>
                                    </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Kontak</h2>
                    <div class="text-justify">
                        <ul class="w-full space-y-2">
                            <?php
                                $sqlit = mysqli_query($mysqli, "SELECT * FROM contact WHERE id_lokasi = '$data[id_lokasi]'");
                                while($datt = mysqli_fetch_array($sqlit)){
                                    $link = $datt['link'];
                                    if (!preg_match("~^(?:f|ht)tps?://~i", $link)){
                                        $link = "http://" . $link;
                                    }
                                    ?>
                                    <li class="flex items-center space-x-2">
                                        <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                        <a href=<?php echo htmlspecialchars($link)?> class="hover:underline font-plusJakarta text-black"><?php echo $datt['contact']?></a>
                                    </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Wisata</h2>
                    <div class="space-x-4 mt-3 flex overflow-auto">
                        <?php
                            $sqlr = mysqli_query($mysqli, "SELECT * FROM gambar_katalog WHERE id_lokasi = '$data[id_lokasi]'");
                            if(mysqli_num_rows($sqlr) > 0){
                                while($d = mysqli_fetch_array($sqlr)){
                                    ?>
                                    <div class="bg-white rounded-lg px-8 py-4">
                                        <div class="flex flex-col justify-around items-center">
                                            <div class="overflow-hidden rounded-md h-[12rem] w-[8rem]">
                                                <img src=<?php echo "./gambar_katalog/".$d['gambar_katalog']?> alt="indukan" class="h-full w-full object-cover" />
                                            </div>
                                            <div class="items-center text-center">
                                                <p class="uppercase font-bigShoulders font-bold text-black md:text-[14px]"><?php echo $data['headline']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:pt-14">
            <img src="./images/map.svg" alt="" class="w-full">
        </div>
    </section>
    <?php include "footer.php"?>
</body>

</html>