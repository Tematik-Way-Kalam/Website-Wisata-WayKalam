<?php
    $sql = mysqli_query($mysqli, "SELECT * FROM info");
    $result = mysqli_fetch_array($sql);
  ?>
  <footer id="kontak" class="bg-[#132758] w-screen shadow flex justify-center" style="background-image: url(./images/footerVector.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="w-full p-4 md:p-20">
      <div class="flex gap-10 md:gap-20 items-center flex-col md:flex-row">
        <div class="flex flex-col text-left md:w-[50%]">
          <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">HUBUNGI KAMI</h2>
          <p class="font-bigShoulders text-[20px] md:text-[64px] text-left font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">MASIH RAGU DAN MEMILIKI BANYAK PERTANYAAN?</p>
        </div>
        <div class="md:w-[50%]">
          <p class="md:text-[20px] mb-8 text-white w-[80%]"><?php echo $result['alamat']." ".$result['nomor_telp']?></p>
          <div class="">
            <a href=<?php echo $result['link_ig']?> class="px-2"><i class="fa-brands fa-instagram fa-2xl text-white"></i></a>
            <a href=<?php echo $result['link_fb']?> class="px-2"><i class="fa-brands fa-facebook fa-2xl text-white"></i></a>
            <a href=<?php echo $result['link_website']?> class="px-2"><i class="fa-solid fa-globe fa-2xl text-white"></i></a>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 lg:my-20" />
      <div class="flex justify-between items-start md:items-center flex-col md:flex-row">
        <span class=" block text-sm text-white sm:text-center"><a href="" class="hover:underline">© 2024 CONNECTH US ALL RIGHT RESERVED</span>
        <ul class="md:font-medium flex flex-row p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:mt-0 items-start md:items-center">
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Wisata</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">UMKM</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Kontak</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Testimonial</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>