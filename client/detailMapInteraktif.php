<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./bg/favicon.svg" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./detailMapInteraktif.css">

    <title>Way Kalam | Map Interaktif</title>
</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #fff;">
        <div class="container d-flex justify-content-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="./bg/Logo.svg" alt="logo-way-kalam" height="60"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black">UMKM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black">Kontak Kami</a>
                    </li>
                    <button class="border-0 p-3 rounded-3" style="background: rgb(19,39,88); background: linear-gradient(313deg, rgba(19,39,88,1) 0%, rgba(0,166,147,1) 100%); color:white;">Map Interaktif<i class="fa-regular fa-map ps-3" style="color: #ffffff;"></i></button>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav" style="background-color: #D6F2FF; padding: 1rem;">
            <div class="input-group d-flex justify-content-center align-items-center bg-white p-2 rounded-2">
                <input type="text" class="form-control border-0" placeholder="Cari Tujuan">
                <div class="input-group-append">
                    <button class="btn btn-secondary border-0 bg-white" type="button">
                        <i class="fa-solid fa-magnifying-glass" style="color: rgba(19,39,88,1);"></i>
                    </button>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-2">
                    <div class="carousel-item active">
                        <img src="./bg/gambar1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./bg/gambar2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./bg/gambar3.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="mt-4">
                <h2 class="">Wisata</h2>
                <p>Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan)  Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan).</p>
            </div>

            <div class="mt-4">
                <h2 class="">Fasilitas</h2>
                <ul>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                </ul>
            </div>

            <div class="mt-4">
                <h2 class="">Kontak</h2>
                <ul>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                    <li class="list-unstyled"><i class="fa-brands fa-instagram"></i>Instagram</li>
                </ul>
            </div>

            <div class="mt-4">
                <h2 class="">Wisata</h2>
                <div class="container-fluid py-2" style="overflow: auto; overflow-x:auto;">
                    <div class="d-flex flex-row flex-nowrap gap-3">
                        <div class="card" style="min-width: 12rem; min-height: 12rem;">
                            <div class="h-100 overflow-hidden">
                                <img class="card-img-top h-100" src="./bg/gambar1.jpeg" alt="Card image cap" style="object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Air Terjun Indukan</p>
                            </div>
                        </div>
                        <div class="card" style="min-width: 12rem; min-height: 12rem;">
                            <div class="h-100 overflow-hidden">
                                <img class="card-img-top h-100" src="./bg/gambar2.jpeg" alt="Card image cap" style="object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Air Terjun Indukan</p>
                            </div>
                        </div>
                        <div class="card" style="min-width: 12rem; min-height: 12rem;">
                            <div class="h-100 overflow-hidden">
                                <img class="card-img-top h-100" src="./bg/gambar1.jpeg" alt="Card image cap" style="object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Air Terjun Indukan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">

            <div class="w-100">
                <img src="./bg/map.png" class="img-fluid vw-100 overflow-x-hidden" alt="...">
            </div>
        </div>
    </div>

    <script src="./mapInteraktif.js"></script>
</body>

</html>