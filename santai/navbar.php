<style>
  #navbar-default a.active {
    color: #7CDBF0;
    background-color: transparent;
  }
</style>


<nav class="fixed z-50 w-full bg-white md:bg-transparent" style="backdrop-filter: blur(2px);">
  <div class="flex flex-wrap items-center justify-between mx-auto p-6 md:px-20">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="./Logo.svg" alt="Flowbite Logo" class="h-16" />
    </a>
    <button id="toggleButton" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 bg-[#00A693] w-10 h-10 justify-center text-sm rounded-md md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>

    <div class="hidden w-full h-screen md:h-auto md:block md:w-auto" id="navbar-default">
      <ul class="font-medium h-screen items-center justify-around md:justify-normal md:h-auto flex flex-col md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:items-center">
        <li>
          <a href="./index.php" id="nav-menu" class="block py-2 px-3 text-[#132758] md:text-white rounded md:bg-transparent md:p-0 md:hover:text-blue-700" aria-current="page">Beranda</a>
        </li>
        <li>
          <a href="./tentang.php" id="nav-menu" class="block py-2 px-3 md:text-white text-[#132758] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Tentang</a>
        </li>
        <li>
          <a href="./index.php#wisata" id="nav-menu" class="block py-2 px-3 md:text-white text-[#132758] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Wisata</a>
        </li>
        <li>
          <a href="./index.php#umkm" id="nav-menu" class="block py-2 px-3 md:text-white text-[#132758] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">UMKM</a>
        </li>
        <li>
          <a href="#kontak" id="nav-menu" class="block py-2 px-3 md:text-white text-[#132758] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Kontak</a>
        </li>
        <li>
          <a href="./mapInteraktif.php" id="map" class="py-3 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:border-0 md:hover:text-white md:p-y-3 md:px-6 md:hover:bg-[#132758] flex items-center">
            <span class="me-2">Map Interaktif</span>
            <img src="./images/icon-map.svg" alt="map" class="h-12" style="height: 2rem;">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get references to the button, the navbar, and current page URL
    const toggleButton = document.getElementById('toggleButton');
    const navbar = document.getElementById('navbar-default');
    const currentPage = window.location.href;

    // Function to mark the active menu item
    function markActiveMenuItem() {
      const menuItems = document.querySelectorAll('#navbar-default a');
      menuItems.forEach(item => {
        // Check if the item's href matches the current page URL
        if (item.href === currentPage) {
          // Add a class to mark it as active
          item.classList.add('active');
        } else {
          // Remove the class if it's not the active page
          item.classList.remove('active');
        }
      });
    }

    // Add a click event listener to the button
    toggleButton.addEventListener('click', function() {
      // Toggle the 'hidden' class on the navbar
      navbar.classList.toggle('hidden');
    });

    // Call the function initially to mark the active menu item
    markActiveMenuItem();
  });
</script>