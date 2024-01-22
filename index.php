<?php
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/Logo.svg" type="image/x-icon">

  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@0.0.6/dist/full.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Beranda | Way Kalam</title>

  <style>
    .container .box:hover {
      width: 60rem;
    }
  </style>

</head>

<body class="bg-white overflow-x-hidden">
  <div id="carouselIndicators" class="relative" data-te-carousel-init data-te-ride="carousel" data-car>
    <!--Carousel indicators-->
    <div class="absolute bottom-0 left-0 right-0 z-[2] px-6 md:px-20 mb-4 flex list-none justify-center md:justify-between py-20 items-center" data-te-carousel-indicators>
      <div class="">
        <button type="button" data-te-target="#carouselIndicators" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[2000ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-te-target="#carouselIndicators" data-te-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[2000ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
        <button type="button" data-te-target="#carouselIndicators" data-te-slide-to="2" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[2000ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
        <button type="button" data-te-target="#carouselIndicators" data-te-slide-to="3" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[2000ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 4"></button>
        <button type="button" data-te-target="#carouselIndicators" data-te-slide-to="4" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[2000ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 5"></button>
      </div>
      <!-- <div class="w-[50%] hidden md:block">
        <p class=" text-white text-[20px]">Di sini, terbentang cerita petualangan, desa wisata memikat hati. Dari air terjun yang menjulang tinggi hingga berkemah di hutan alami. Rencanakan perjalananmu, temukan pengalaman dan kebahagiaan, di setiap klik halaman kami.</p>
      </div> -->
    </div>

    <!--Carousel items-->
    <div class="relative w-screen overflow-hidden after:clear-both after:block after:content-[''] h-screen">
      <?php 
        $sql = mysqli_query($mysqli, "SELECT * FROM slide");
        while($result = mysqli_fetch_array($sql)){
          ?>
          <div class="relative float-left -mr-[100%] w-full h-[100%] transition-transform duration-[2000ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
            <img src=<?php echo "./gambar_slide/".$result['gambar']?> class="block w-full h-full object-cover" alt="air terjun way kalam" />
            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center md:justify-start md:p-20">
              <span class="text-white text-[24px] md:text-[96px] font-bigShoulders font-black md:w-1/3"><?php echo strtoupper($result['headline'])?></span>
            </div>
            <div class="absolute bottom-0 right-0 p-6 text-white hidden md:block md:w-[50%]">
              <p class="text-[20px]"><?php echo $result['deskripsi']?></p>
            </div>
          </div>
          <?php
        }
      ?>  
    </div>
  </div>

  <!-- TENTANG -->
  <section class="px-6 md:px-16 py-10 md:py-40 flex gap-6 md:gap-40 justify-center flex-col md:flex-row">
    <h2 class="font-black text-[32px] grid-cols-1 font-bigShoulders bg-gradient-to-r from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">Way Kalam</h2>
    <div class="md:w-[65%] text-justify">
      <p class="text-base md:text-[14px] mb-8">Desa Way Kalam merupakan sebuah desa wisata yang terletak di lereng gunung Rajabasa kabupaten Lampung Selatan. Hampir semua wisata yang ada di desa Way Kalam berhubungan dengan alam. Di Desa Wisata Way Kalam kamu diajak untuk merasakan experience yang memacu adrenalin dan menambah pengetahuan. Air terjun dan taman edukatif "Lebah Kelanceng" merupakan sarana yang tepat. Tak jarang wisatawan asing memilih Desa Way Kalam sebagai destinasi wisata mereka.....</p>
      <a href="#" class="py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </section>

  <!-- VISITOR N VIDEO -->
  <?php
    $sql = mysqli_query($mysqli, "SELECT * FROM video");
    $result = mysqli_fetch_array($sql);
    $sql1 = mysqli_query($mysqli, "SELECT SUM(jumlah_pengunjung_air_terjun) AS total_pengunjung FROM statistik");
    $result1 = mysqli_fetch_array($sql1);
    $sql2 = mysqli_query($mysqli, "SELECT * FROM wisata WHERE kategori = 'Home Stay'");
    $result2 = mysqli_num_rows($sql2);
  ?>
  <section class="py-10 md:py-0 px-6 md:px-10 md:pb-20 flex justify-center w-full items-center flex-col md:flex-row gap-4 md:gap-0 overflow-x-hidden">
    <iframe src="<?php echo $result['link']?>" class="rounded-2xl w-full md:w-[810px] md:h-[457px] md:px-2 md:p-0" allowfullscreen allow='autoplay'></iframe>
    <div class="bg-[#132758] flex justify-center items-center flex-row md:flex-col rounded-2xl my-8 md:my-8 ms-0 md:ms-20 min-w-full min-h-full py-10 md:py-0 md:min-w-[457px] md:min-h-[457px] gap-10 md:gap-0" style="background-image: url(./images/visit.png); background-repeat: no-repeat; background-size: cover;">
      <div class="flex justify-center items-center flex-col">
        <p class="font-bigShoulders font-black text-[32px] md:text-[64px]" style=" background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $result1['total_pengunjung'] ?></p>
        <p class="md:text-2xl text-white">Pengunjung Air Terjun</p>
      </div>
      <div class="flex justify-center items-center flex-col">
        <p class="font-bigShoulders font-black text-[32px] md:text-[64px]" style="background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo $result2 ?></p>
        <p class="md:text-2xl text-white">Homestay</p>
      </div>
    </div>
  </section>

  <section class="px-6 md:px-20 py-10 md:py-20 bg-[#E2F6FF] overflow-hidden" style="background-image: url(./images/bg1.svg); background-repeat: no-repeat; background-size: cover;">
    <div id="wisata"></div>
    <div class="flex justify-center w-full items-center flex-col md:flex-row">
      <div class="md:w-[50%]">
        <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">WISATA</h2>
        <p class="font-bigShoulders text-[20px] md:text-[64px] font-black text-[#132758]">EXPLORE THE VILLAGE AND PRECISION BEHIN OUR HEALING AND ENJOY</p>
      </div>
      <div class="py-6 md:py-0 md:ms-20 md:w-[50%]">
        <p class="text-[#132758] md:text-[20px] mb-8">
          Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.
        </p>
        <a href="#" class="hidden w-auto md:flex py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:border-0 md:hover:text-blue-700 md:p-y-3 md:px-6 items-center"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="pb-6 md:py-20 flex gap-6 md:gap-20 justify-center items-center flex-col md:flex-row">
        <div class="container md:h-[50rem] flex flex-col md:flex-row md:grid" style="position: relative; grid-template-columns: 1fr 1fr 1fr; gap: 1em; transition: all 500ms;">
        <?php 
          $sql = mysqli_query($mysqli, "SELECT * FROM wisata WHERE kategori = 'wisata'");
          $td = 1;
          while($res = mysqli_fetch_array($sql)){
            if($td > 3){
              break;
            }
            ?>
            <div class="box relative bg-[#17141f] bg-cover flex justify-start items-end rounded-lg w-auto" style="transition: all 500ms;">
              <div class="absolute inset-0 m-0 h-full w-full overflow-hidden bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none rounded-2xl" style="background-image: url('<?php echo "./gambar_tempat/" . $res['gambar']; ?>');">
                <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
              </div>
              <div class="relative p-6 px-6 py-14 md:px-12 text-left">
                <h2 class="mb-6 block text-[32px] font-black font-bigShoulders leading-[1.5] tracking-normal text-white antialiased">
                  <?php echo strtoupper($res['headline'])?>
                </h2>
                <h5 class="block mb-4 text-base md:text-xl antialiased font-normal leading-snug tracking-normal text-white">
                  <?php echo $res['deskripsi'] ?>
                </h5>
                <a href="#" class="block py-4 px-8 text-center text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-[#132758] md:border-0 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <?php
            $td++;
          }
        ?>
        </div>
    </div>

    <div id="umkm"></div>
    <div class="py-10 flex justify-center w-screen items-center md:py-20 flex-col md:flex-row overflow-hidden">
      <div class="w-full md:w-[50%]">
        <h2 class="font-bigShoulders text-[20px] md:text-[32px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PRODUK UMKM DESA</h2>
        <p class="font-bigShoulders text-[32px] md:text-[64px] font-black text-[#132758] pb-8">YUK, LIAT PRODUK UMKM DESA WAY KALAM!</p>
        <a href="#" class="my-10 md:my-0 py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:py-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="md:ms-20">
        <div class="carousel space-x-4 mt-20">
          <?php
            $sql = mysqli_query($mysqli, "SELECT * FROM wisata a INNER JOIN produk b ON a.id_wisata = b.id_wisata WHERE a.kategori = 'Warung/Toko' or a.kategori = 'UMKM'");
            while($result = mysqli_fetch_array($sql)){
              ?>
                <div class="carousel-item h-[25rem] md:h-[50rem]">
                  <img class="rounded-lg" src=<?php echo "./gambar_produk/".$result['gambar_produk']?> alt="Banana" />
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <?php
      $sql = mysqli_query($mysqli, "SELECT * FROM penghargaan_ld a INNER JOIN penghargaan b ON a.id_penghargaan = b.id_penghargaan");
      $no = 1;
      while($result = mysqli_fetch_array($sql)){
        if($no == 1){
        ?>
        <div class="p-6 md:p-20 flex gap-10 md:gap-20 justify-center w-full items-center flex-col-reverse md:flex-row">
          <div class="py-6 md:py-0 md:w-[50%]"><img src=<?php echo "./gambar_penghargaan/".$result['gambar']?> alt="Anugerah Desa Wisata Indonesia 2023"></div>
          <div class="md:w-[50%]">
            <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PENGHARGAAN</h2>
            <p class="font-bigShoulders text-[20px] md:text-[64px] font-black text-[#132758]"><?php echo strtoupper($result['headline'])?></p>
            <p class="md:text-[20px]"><?php echo $result['deskripsi']?> </p>
          </div>
        </div>
        <?php
        }else{
          ?>
          <div class="px-6 md:p-20 flex gap-10 md:gap-20 justify-center w-full items-center flex-col md:flex-row">
            <div class="md:w-[50%]">
              <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PENGHARGAAN</h2>
              <p class="font-bigShoulders text-[20px] md:text-[64px] font-black text-[#132758]"><?php echo strtoupper($result['headline'])?></p>
              <p class="md:text-[20px]"><?php echo $result['deskripsi']?> </p>
            </div>
            <div class="py-6 md:py-0 md:w-[50%]"><img src=<?php echo "./gambar_penghargaan/".$result['gambar']?> alt="Anugerah Desa Wisata Indonesia 2023"></div>
          </div>
          <?php
        }
        $no++;
      }
    ?>
    <div class="bg-[#132758] w-screen flex p-6 md:p-20 gap-10 md:gap-20 items-center flex-col md:flex-row" style="background-image: url(./images/bg-penghargaan.png); background-repeat: no-repeat; background-size: cover;">
      <p class="md:w-[50%] font-bigShoulders text-[14px] md:text-[64px] font-black bg-gradient-to-br from-[#ffffff] via-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">LIHAT PENGHARGAAN DESA WAY KALAM LEBIH BANYAK</p>
      <div class="md:w-[50%] py-6 md:py-0">
        <p class="md:text-[20px] mb-8">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan</p>
        <a href="tentang.php" class="my-6 py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:py-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <section class="px-6 py-10 md:p-20 text-center bg-[#E2F6FF]">
    <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">TESTIMONIAL</h2>
    <p class="font-bigShoulders text-[20px] md:text-[64px] font-black text-[#132758]">AYO, BACA PENGALAMAN DAN CERITA SERU MEREKA!</p>
    <div class="w-full flex flex-col md:flex-row gap-6 md:gap-20 py-6">
      <?php
        $sql = mysqli_query($mysqli, "SELECT * FROM testimoni");
        while($res = mysqli_fetch_array($sql)){
          ?>
          <div class="bg-white p-6 md:w-[50%] rounded-lg">
            <div class="flex pb-6">
              <div class="avatar">
                <div class="w-24 h-24 rounded">
                  <img src=<?php echo "./foto_pengomentar/".$res['foto']?> class="w-full h-full object-cover" />
                </div>
              </div>
              <div class="ml-6 flex flex-col items-start justify-between">
                <div class="flex flex-col items-start">
                  <p><?php echo $res['nama']?></p>
                  <p><?php echo $res['status']?></p>
                </div>
                <div class="space-x-2">
                  <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                  <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                  <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                  <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                  <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                </div>
              </div>
            </div>
            <div class="text-justify">
              <p><?php echo $res['komen']?></p>
            </div>
          </div>
          <?php
        }
      ?>
      
    </div>

  </section>

  <section class="p-6 md:p-20">
    <div class="bg-[#132758] flex flex-col py-6 md:p-20 rounded-3xl gap-10 md:gap-20 items-center" style="background-image: url(./images/bg-mi.png); background-repeat: no-repeat; background-size: cover;">
      <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">MAP INTERAKTIF</h2>
      <p class="font-bigShoulders text-[20px] md:text-[64px] md:w-[50%] text-center font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">TAKUT NYASAR? TEMUKAN PETANYA DISINI!</p>
      <a href="./mapInteraktif.php" class="py-4 px-8 text-[#132758] bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] rounded-lg hover:bg-gray-100 md:border-0 md:hover:text-blue-700 md:py-3 md:px-6 flex items-center"><span class="me-2 font-bold text-base md:text-[14px]">Map Interaktif</span><img src="./images/icon-map-dark.svg" alt="map"></a>
    </div>
  </section>
  <?php include "footer.php"?>

  <script src="./carousel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/daisyui@0.0.6/dist/full.js"></script>
</body>

</html>