<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- BOOTSRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- FONT -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Landing Page</title>
</head>
<body>
    <header>
        <div id="latar" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div id="latar" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#latar" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#latar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#latar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="bg/gambar1.jpeg" class="d-block w-100" alt="bg1">
                        <h1 id="judul">AIR TERJUN <br> WAY KALAM</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar2.jpeg" class="d-block w-100" alt="bg2">
                        <h1 id="judul">AIR TERJUN <br> INDUKAN</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar3.jpeg" class="d-block w-100" alt="bg3">
                        <h1 id="judul">AIR TERJUN <br> ANAKAN</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar4.jpeg" class="d-block w-100" alt="bg4">
                        <h1 id="judul">.......................</h1>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="bg/gambar5.png" class="d-block w-100" alt="bg"5>
                        <h1 id="judul">.......................</h1>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#latar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#latar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="text-header">
                    <p>
                        Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah 
                        Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang 
                        terkenal di Kabupaten Lampung Selatan).
                    </p>
                </div>
            </div>
        </div>

        <img id="logo" src="bg/logo sementara.png" alt="LOGO">

        <div class="d-flex justify-content-between align-items-center">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav text-white">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                            <a type="button" class="nav-link btn btn-info" href="#section1">Tentang</a>
                            <a type="button" class="nav-link btn btn-info" href="#section2">Wisata</a>
                            <a type="button" class="nav-link btn btn-info" href="#section2">UMKM</a>
                            <a  type="button" class="nav-link btn btn-info" href="#section5">
                                Map Interaktif <i class="fa fa-map" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section id="section1">
        <table>
            <td class="td1">
                <h2>Tentang</h2>
            </td>
            <td class="td2">
                <p>Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan)  Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) </p>
                <a  type="button" class="nav-link btn btn-primary" href="#">
                    Lihat Selengkapnya <i class="far fa-arrow-alt-circle-right"></i>
                </a>
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

    <section id="section5">
        <h2>Map Interaktif</h2>
        <p>Isi dari section 5</p>
    </section>

    <footer>
        <h4>CONTACT US</h4>
        <p>KUNJUNGI DAN RASAKAN <br>KEINDAHAN ALAM</p>
    </footer>
</body>
</html>
