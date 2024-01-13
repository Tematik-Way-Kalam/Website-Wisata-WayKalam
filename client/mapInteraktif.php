<?php include "navbar.php" ?>

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

    <style>
    @media (min-width: 376px) {
        #mobile-view {
            display: none;
        }
    }
</style>
</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif;">

    <div class="main-container d-flex" style="padding-top: 6.5rem;">
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

            <!-- Mobile -->
            <div id="mobile-view" style="background-color: #D6F2FF; padding: 1rem;">
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
        </div>
    </div>

    <script src="./mapInteraktif.js"></script>
</body>

</html>