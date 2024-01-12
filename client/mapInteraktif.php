<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./bg/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./mapInteraktif.css">

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
            <div class="bg-white p-3 mt-3 rounded-2">
                <div class="row mt-3">
                    <div class="col-sm p-2">
                        <a href="" class="text-decoration-none d-flex justify-content-center flex-column align-items-center gap-3 text-black"><i class="fa-solid fa-border-all fa-2xl" style="color: rgba(19,39,88,1);"></i>Semua</a>
                    </div>
                    <div class="col-sm p-2">
                        <a href="" class="text-decoration-none d-flex justify-content-center flex-column align-items-center gap-3 text-black"><i class="fa-solid fa-plane-departure fa-2xl" style="color: rgba(19,39,88,1);"></i>Wisata</a>
                    </div>
                    <div class="col-sm p-2">
                        <a href="" class="text-decoration-none d-flex justify-content-center flex-column align-items-center gap-3 text-black"><i class="fa-solid fa-store fa-2xl" style="color: rgba(19,39,88,1);"></i>UMKM</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm p-2">
                        <a href="" class="text-decoration-none d-flex justify-content-center flex-column align-items-center gap-3 text-black"><i class="fa-solid fa-bed fa-2xl" style="color: rgba(19,39,88,1);"></i>Homestay</a>
                    </div>
                    <div class="col-sm p-2">
                        <a href="" class="text-decoration-none d-flex justify-content-center flex-column align-items-center gap-3 text-black"><i class="fa-solid fa-wheat-awn fa-2xl" style="color: rgba(19,39,88,1);"></i>Peternakan</a>
                    </div>
                    <div class="col-sm p-2">
                        <a href="" class="text-decoration-none d-flex justify-content-center flex-column align-items-center gap-3 text-black"><i class="fa-solid fa-shop fa-2xl" style="color: rgba(19,39,88,1);"></i>Warung</a>
                    </div>
                </div>
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


            <div class="mt-4">
                <h2 class="">UMKM</h2>
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


            <div class="mt-4">
                <h2 class="">Homestay</h2>
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


            <div class="mt-4">
                <h2 class="">Warung/Toko</h2>
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