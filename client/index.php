<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./bg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <!-- BOOTSRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- FONT -->
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <title>Way Kalam | Beranda</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #fff;">
            <div class="container d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="./bg/Logo.svg" alt="logo-way-kalam" height="60"></a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto gap-3 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white">UMKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white">Kontak Kami</a>
                        </li>
                        <button class="border-0 p-3 rounded-3" style="background: rgb(19,39,88); background: linear-gradient(313deg, rgba(19,39,88,1) 0%, rgba(0,166,147,1) 100%); color:white;">Map Interaktif<i class="fa-regular fa-map ps-3" style="color: #ffffff;"></i></button>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="latar" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div id="latar" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="bg/gambar1.jpeg" class="d-block w-100" alt="bg1" style="background-size: cover; background-repeat: no-repeat;">
                        <h1 id="judul">AIR TERJUN <br> WAY KALAM</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar2.jpeg" class="d-block w-100" alt="bg2" style="background-size: cover; background-repeat: no-repeat;">
                        <h1 id="judul">AIR TERJUN <br> INDUKAN</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar3.jpeg" class="d-block w-100" alt="bg3" style="background-size: cover; background-repeat: no-repeat;">
                        <h1 id="judul">AIR TERJUN <br> ANAKAN</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar4.jpeg" class="d-block w-100" alt="bg4" style="background-size: cover; background-repeat: no-repeat;">
                        <h1 id="judul">.......................</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar5.png" class="d-block w-100" alt="bg"  style="background-size: cover; background-repeat: no-repeat;"5>
                        <h1 id="judul">.......................</h1>
                    </div>
                </div>

                <div class="text-header">
                    <p>
                        Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah
                        Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang
                        terkenal di Kabupaten Lampung Selatan).
                    </p>
                </div>
            </div>
        </div>
    </header>

    <section id="section1">
        <table class="table1">
            <td class="td1">
                <h2>Tentang</h2>
            </td>
            <td class="td2">
                <p>Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan)  Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) </p>
                <a  type="button" class="nav-link btn btn-primary" href="#">
                    Lihat Selengkapnya <i class="fa-solid fa-circle-arrow-right"></i>
            </td>
        </table>
        <table class="table2">
            <td class="td3">
                <video src="bg/JJ.mp4" width="810" height="457" controls></video>
            </td>
            <td class="td4">
                <img src="bg/visit.jpg" width="457" height="457" alt="visitor">
            </td>
        </table>
    </section>

    <section id="section2">
        <h2>Wisata</h2>
        <p>Isi dari section 2</p>

        <h2>UMKM</h2>
        <p>Isi dari section 2</p>
    </section>

    <section id="section3">
        <h2>Penghargaan</h2>
        <p>Isi dari section 3</p>
    </section>

    <section id="section4">
        <h2>Testimonial</h2>
        <p>Isi dari section 4</p>
    </section>

    <!--  Penghargaan -->
    <section id="section5" class = "archive">
        <div id="inner-section5">
            <div align="center" class="teks-map">
                <p class = fs-2> MAP INTERAKTIF</p>
                <p> TEMUKAN LOKASI YANG KAMU <br> MAU DENGAN MUDAH</p>
            </div>
            <div class="button-map">
                <a type="button" class = "nav-link" href="#section5">Map Interaktif <i class="fa-solid fa-map" aria-hidden="true"></i>
                </a>
            </div>
        </div>  
    </section>

    <footer>
        <h4>CONTACT US</h4>
        <p>KUNJUNGI DAN RASAKAN <br>KEINDAHAN ALAM</p>
    </footer>
</body>

</html>