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

<body>
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
        <div class="sidebar" id="side_nav" style="background-color: #ace5ff; padding: 1rem;">
            <div class="input-group d-flex justify-content-center align-items-center bg-white p-2 rounded-2">
                <input type="text" class="form-control border-0" placeholder="Cari Tujuan">
                <div class="input-group-append">
                    <button class="btn btn-secondary border-0" type="button" style="background: #D9D9D9;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="content">

            <div class="dashboard-content px-3 pt-4">
                <h2 class="fs-5"> Dashboard</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, totam? Sequi alias eveniet ut quas
                    ullam delectus et quasi incidunt rem deserunt asperiores reiciendis assumenda doloremque provident,
                    dolores aspernatur neque.</p>
            </div>
        </div>
    </div>

    <script src="./mapInteraktif.js"></script>
</body>

</html>