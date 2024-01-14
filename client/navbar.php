<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light px-5">
        <a class="navbar-brand" href="#"><img src="./bg/Logo.svg" alt="logo-way-kalam" height="60"></a>
        <button class="navbar-toggler" type="button" id="navbarToggleBtn">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto gap-3 d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link active text-black" aria-current="page" href="./">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="./tentang.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#wisata">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#umkm">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#contact">Kontak Kami</a>
                </li>
                <button class="border-0 p-3 rounded-3" style="background: rgb(19,39,88); background: linear-gradient(313deg, rgba(19,39,88,1) 0%, rgba(0,166,147,1) 100%); color:white;">Map Interaktif<i class="fa-regular fa-map ps-3" style="color: #ffffff;"></i></button>
            </ul>
        </div>
</nav>

<script>
    document.getElementById('navbarToggleBtn').addEventListener('click', function() {
        document.getElementById('navbarSupportedContent').classList.toggle('show');
    });
</script>