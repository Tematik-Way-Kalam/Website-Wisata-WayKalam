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

            <div class="carousel w-full rounded-lg">
                <div id="item1" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div>
                <div id="item2" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div>
                <div id="item3" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div>
                <div id="item4" class="carousel-item w-full">
                    <img src="./images/gambar1.png" class="w-full" />
                </div>
            </div>
            <!-- <div class="flex justify-center w-full py-2 gap-4">
                <a href="#item1" class="btn btn-xs">1</a>
                <a href="#item2" class="btn btn-xs">2</a>
                <a href="#item3" class="btn btn-xs">3</a>
                <a href="#item4" class="btn btn-xs">4</a>
            </div> -->

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Air Terjun Indukan</h2>
                    <div class="text-justify font-plusJakarta text-black">
                        <p>Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan)</p>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Fasilitas</h2>
                    <div class="text-justify">
                        <ul class="w-full space-y-2">
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Kontak</h2>
                    <div class="text-justify">
                        <ul class="w-full space-y-2">
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                            <li class="flex items-center space-x-2">
                                <i class="fa-regular fa-circle-check" style="color: #00A693;"></i>
                                <a href="" class="hover:underline font-plusJakarta text-black">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <div class="">
                    <h2 class="font-bigShoulders text-[16px] md:text-[16px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text py-3">Wisata</h2>
                    <div class="space-x-4 mt-3 flex overflow-auto">
                        <div class="bg-white rounded-lg px-8 py-4">
                            <div class="flex flex-col justify-around items-center">
                                <div class="overflow-hidden rounded-md h-[12rem] w-[8rem]">
                                    <img src="./images/wisata/indukan.svg" alt="indukan" class="h-full w-full object-cover" />
                                </div>
                                <div class="items-center text-center">
                                    <p class="uppercase font-bigShoulders font-bold text-black md:text-[14px]">Air Terjun Indukan</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg px-6 py-3">
                            <div class="flex flex-col justify-around items-center">
                                <div class="overflow-hidden rounded-md h-[12rem] w-[8rem]">
                                    <img src="./images/wisata/anakan.svg" alt="anakan" class="h-full w-full object-cover" />
                                </div>
                                <div class="items-center text-center">
                                    <p class="uppercase font-bigShoulders font-bold text-black md:text-[14px]">Air Terjun Anakan</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg px-6 py-3">
                            <div class="flex flex-col justify-around items-center">
                                <div class="overflow-hidden rounded-md h-[12rem] w-[8rem]">
                                    <img src="./images/wisata/camping.svg" alt="camping" class="h-full w-full object-cover" />
                                </div>
                                <div class="items-center text-center">
                                    <p class="uppercase font-bigShoulders font-bold text-black md:text-[14px]">Camping Ground</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:pt-14">
            <img src="./images/map.svg" alt="" class="w-full">
        </div>
    </section>

    <footer class="bg-[#132758] w-screen shadow flex justify-center" style="background-image: url(./images/footerVector.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="w-full p-4 md:p-20">
            <div class="flex gap-10 md:gap-20 items-center flex-col md:flex-row">
                <div class="flex flex-col text-left md:w-[50%]">
                    <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">HUBUNGI KAMI</h2>
                    <p class="font-bigShoulders text-[20px] md:text-[64px] text-left font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">MASIH RAGU DAN MEMILIKI BANYAK PERTANYAAN?</p>
                </div>
                <div class="md:w-[50%]">
                    <p class="md:text-[20px] mb-8 text-white w-[80%]">Way Kalam, Kec. Penengahan, Kabupaten Lampung Selatan, Lampung 35592 082372825801</p>
                    <div class="">
                        <a href="" class="px-2"><i class="fa-brands fa-instagram fa-2xl text-white"></i></a>
                        <a href="" class="px-2"><i class="fa-brands fa-facebook fa-2xl text-white"></i></a>
                        <a href="" class="px-2"><i class="fa-solid fa-globe fa-2xl text-white"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 lg:my-20" />
            <div class="flex justify-between items-start md:items-center flex-col md:flex-row">
                <span class=" block text-sm text-white sm:text-center">© 2023 <a href="" class="hover:underline">© 2024 CONNECTH US ALL RIGHT RESERVED</span>
                <ul class="md:font-medium flex flex-row p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:mt-0 items-start md:items-center">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Wisata</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">UMKM</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Kontak</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Testimonial</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>