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

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Landing Page</title>

    <link rel="stylesheet" href="font-awesome/css/all.css">
    <title>Way Kalam | Beranda</title>

</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #fff;">
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
                        <img src="bg/gambar5.jpg" class="d-block w-100" alt="bg" style="background-size: cover; background-repeat: no-repeat;" 5>
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

    <!-- About us -->
    <section id="section1">
        <table class="table1">
            <td class="td1">
                <h2>Tentang</h2>
            </td>
            <td class="td2">
                <p>Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) </p>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: rgb(19,39,88); background: linear-gradient(313deg, rgba(19,39,88,1) 0%, rgba(0,166,147,1) 100%); color:white;">
                    Lihat Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 25" fill="none">
                        <path d="M12 22.4594C17.5228 22.4594 22 17.9822 22 12.4594C22 6.9365 17.5228 2.45935 12 2.45935C6.47715 2.45935 2 6.9365 2 12.4594C2 17.9822 6.47715 22.4594 12 22.4594Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16.4594L16 12.4594L12 8.45935" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 12.4594H16" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
            </td>
        </table>
        <table class="table2 d-flex justify-content-center align-items-center py-5">
            <tr class="d-flex align-items-center gap-5 mt-5">
                <td class="d-flex align-items-center">
                    <video src="bg/JJ.mp4" width="810" height="457" controls class="mr-5 rounded-5"></video>
                </td>
                <td id="visitor" class="text-white d-flex flex-column justify-content-center align-items-center rounded-5" style="background-color: #132758; background-image: url(./bg/visit.png); background-repeat: no-repeat; background-size: cover; min-width: 457px; min-height: 457px;">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <p style="font-size: 64px; font-family: 'Big Shoulders Display', sans-serif; font-weight: 900; background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">2000+</p>
                        <p style="font-size: 20px;">Pengunjung Air Terjun</p>
                    </div>
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <p style="font-size: 64px; font-family: 'Big Shoulders Display', sans-serif; font-weight: 900; background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">22+</p>
                        <p style="font-size: 20px;">Homestay</p>
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <!-- section 2 -->
    <section id="section2">
        <div class="wisata">
            <div class="ex1">
                <p class="teks-wisata">Wisata</p>
                <p class="teks-explore">EXPLORE THE VILLAGE AND PRECISION BEHIND OUR HEALING AND ENJOY</p>
            </div>
            <div class="ex2">
                <p class="teks-desc">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa</p>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white;">
                    Lihat Selengkapnya<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 25" fill="none">
                        <path d="M12 22.4594C17.5228 22.4594 22 17.9822 22 12.4594C22 6.9365 17.5228 2.45935 12 2.45935C6.47715 2.45935 2 6.9365 2 12.4594C2 17.9822 6.47715 22.4594 12 22.4594Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16.4594L16 12.4594L12 8.45935" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 12.4594H16" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> </a>
            </div>
        </div>

        <div class="cardboard">
            <!-- Card 1 -->
            <div class="card" id="wisata" style="width: 18rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Red_Kitten_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Air Terjun Way Kalam (Induk)</h5>
                    <p class="card-text">Infokan animasi yang bagus</p>
                    <a href="#" class="btn btn-primary">Disini ya!</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card" id="wisata" style="width: 18rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Red_Kitten_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Air Terjun Way Kalam (Induk)</h5>
                    <p class="card-text">Infokan animasi yang bagus</p>
                    <a href="#" class="btn btn-primary">Disini ya!</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card" id="wisata" style="width: 18rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Red_Kitten_01.jpg" alt="...">
                <h5 class="cardTitle">Air Terjun Way Kalam (Induk)</h5>
                <p class="cardText">Infokan animasi yang bagus</p>
                <a href="#" class="btn btn-primary">Disini ya!</a>
            </div>

        </div>

        <div class="umkm">
            <div class="direction">
                <p class="teks-produk">PRODUK UKM DESA</p>
                <p class="teks-dukungUMKM">DUKUNG UMKM DESA WISATA WAY KALAM</p>
                <div>
                    <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white;">
                        Lihat Selengkapnya<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 25" fill="none">
                            <path d="M12 22.4594C17.5228 22.4594 22 17.9822 22 12.4594C22 6.9365 17.5228 2.45935 12 2.45935C6.47715 2.45935 2 6.9365 2 12.4594C2 17.9822 6.47715 22.4594 12 22.4594Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 16.4594L16 12.4594L12 8.45935" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 12.4594H16" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> </a>
                </div>

            </div>
            <div class="cardukm">
                <div class="card">
                    <img src="" alt="">
                    <h4>KOPI WAY KALAM</h4>
                </div>
                <div class="card">
                    <img src="" alt="Aneka Camilan Pisang">
                    <h4>ANEKA CAMILAN PISANG</h4>
                </div>
                <div class="card">
                    <img src="" alt="Produk Madu Kelulut">
                    <h4>PRODUKSI MADU KELULUT</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="section3">
        <div class="layer1">
            <div class="banner">
                <img src="../client/bg/piagam1.jpeg" alt="contoh gambar">
            </div>
            <div class="explain">
                <p class="main-heading">PENGHARGAAN</p>
                <p class="sub-heading">MASUK KEDALAM 300 DESA WISATA TERBAIK DI INDONESIA</p>
                <p class="explain-text">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.</p>
            </div>
        </div>

        <div class="layer2">
            <div class="explain">
                <p class="main-heading">PENGHARGAAN</p>
                <p class="sub-heading">MASUK KEDALAM 300 DESA WISATA TERBAIK DI INDONESIA</p>
                <p class="explain-text">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.</p>
            </div>
            <div class="banner">
                <img src="../client/bg/piagam2.jpeg" alt="piagam 2" />
            </div>
        </div>

    </section>
    <section class="added">
        <div class="moreopt" style="background-color: #132758; background-image: url(./bg/moreopt.png); background-size: cover; background-repeat: no-repeat;">
            <div class="exp3">
                <p class="teks-penghargaan">LIHAT PENGHARGAAN DESA WAY KALAM LEBIH BANYAK</p>
            </div>
            <div class="exp4">
                <p class="teks-moreopt">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten</p>
                <a type="button" class="nav-link btn btn-primary p-2" href="#" style="background: var(--pu2, #00A693); color:white; display: flex; padding: 15px 20px;justify-content: center;align-items: center;gap: 10px;">Lihat Selengkapnya<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 25" fill="none">
                        <path d="M12 22.4594C17.5228 22.4594 22 17.9822 22 12.4594C22 6.9365 17.5228 2.45935 12 2.45935C6.47715 2.45935 2 6.9365 2 12.4594C2 17.9822 6.47715 22.4594 12 22.4594Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16.4594L16 12.4594L12 8.45935" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 12.4594H16" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg> </a>
                <!-- <a href="" class = "btn btn-primary">Hore udah kelar</a> -->
            </div>
        </div>
    </section>

    <!-- Section 4 (Testimonial) -->
    <section id="section4">
        <div class="judultest" align="center">
            <p class="text-testimonial">TESTIMONIAL</p>
            <p class="text-katamereka">APA KATA MEREKA?</p>
        </div>
        <div class="cardtest">

        </div>
    </section>

    <!--  Section 5 (Penghargaan) -->
    <section id="section5" class="archive">
        <div id="inner-section5">
            <div align="center" class="teks-map">
                <p class=fs-2> MAP INTERAKTIF</p>
                <p> TEMUKAN LOKASI YANG KAMU <br> MAU DENGAN MUDAH</p>
            </div>
            <div class="button-map">
                <a type="button" class="nav-link" href="./mapInteraktif.php">Map Interaktif <i class="fa-solid fa-map" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="banner">
            <div class="container">
                <div class="contact-us">
                    <h4>CONTACT US</h4>
                    <p class="kunjungi-dan-rasakan">KUNJUNGI DAN RASAKAN <br>KEINDAHAN ALAM</p>
                </div>
            </div>

            <div class="contact-info">
                <p>Way Kalam, Kec. Penengahan, Kabupaten Lampung Selatan, Lampung 35592</p>
                <p>083773473484</p>
                <!-- icon ig, icon facebook, icon website -->
                <div class="icons">
                    <li><img src="../client/bg/instagram.svg" alt=""></li>
                    <li> <img src="../client/bg/facebook.svg" alt=""></li>
                    <li> <img src="../client/bg/globe.svg" alt=""></li>
                </div>
            </div>
        </div>

        <hr class="border-tebal">

        <div>
            <div class="down">
                <div class="connect">
                    <div class="reserved">
                        <p>&copy; 2023 CONNECTH US ALL RIGHT RESERVED</p>
                    </div>
                </div>

                <div class="menuItems">
                    <li><a href='#' data-item='Home'>Home</a></li>
                    <li><a href='#' data-item='Wisata'>Wisata</a></li>
                    <li><a href='#' data-item='UMKM'>UMKM</a></li>
                    <li><a href='#' data-item='Contact Us'>Contact Us</a></li>
                    <li><a href='#' data-item='Testimonial'>Testimonial</a></li>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>