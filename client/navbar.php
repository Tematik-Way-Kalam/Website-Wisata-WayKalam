<style>
    /* Navbar tanpa warna latar belakang default */
    .navbar {
        transition: background-color 0.3s ease;
    }

    .navbar-scrolled {
        background-color: rgba(255, 255, 255, 0.9);
        /* Warna latar belakang saat navbar di-scroll */
    }
</style>

<nav class="navbar fixed-top navbar-expand-lg navbar-light px-5">
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
    // Ambil elemen navbar
    var navbar = document.querySelector('.navbar');

    // Tambahkan event listener untuk deteksi scroll
    window.addEventListener('scroll', function() {
        // Tambahkan kelas 'navbar-scrolled' jika user telah menscroll
        if (window.scrollY > 0) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });

    // Tambahkan event listener untuk toggle menu di mobile
    document.getElementById('navbarToggleBtn').addEventListener('click', function() {
        document.getElementById('navbarSupportedContent').classList.toggle('show');
    });
</script>