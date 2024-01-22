<?php
include "navbar.php";
include "admin/koneksi.php";
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

    <title>Tentang | Way Kalam</title>
</head>

<body class="bg-white overflow-x-hidden">
    <div class="h-1/2 md:h-screen w-screen relative pt-20 md:pt-0">
        <!-- Image -->
        <img src="./images/banner-tentang.png" alt="" class="w-full h-full object-cover">

        <!-- Text container -->
        <div class="absolute w-full bottom-0 md:top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <p class="mt-2 text-white text-[20px] md:text-[55px] font-bigShoulders font-black">DESA WISATA</p>
            <h1 class="text-[62px] md:text-[280px] font-bigShoulders font-black">WAY KALAM</h1>
        </div>
    </div>

    <section class="p-6 md:p-20 flex gap-6 md:gap-40 flex-col md:flex-row">
        <table class="">
            <tr>
                <td class="flex justify-center md:hidden py-6">
                    <h2 class="font-bigShoulders font-black text-[20px] md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">AWAL PERJALANAN</h2>
                </td>
            </tr>
            <tr>
                <td class="md:flex justify-start hidden">
                    <h2 class="font-bigShoulders font-black md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">AWAL PERJALANAN</h2>
                </td>
                <td class="md:ps-40 space-y-6 text-justify">
                    <p class="text-base md:text-[14px]">Banyak hal menarik yang bisa anda temukan di Lampung Selatan. Kabupaten Serambi Sumatera ini memiliki sejuta potensi wisata yang siap untuk anda kunjungi</p>
                    <p class="text-base md:text-[14px]">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) Jarak tempuh 17 km dari pusat Kota Kalianda/Ibukota Kabupaten Lampung Selatan  dengan jarak tempuh 26 Menit, serta berlokasi di ketinggian 372 m dpl.  </p>
                    <p class="text-base md:text-[14px]">Mengangkat tema Desa Wisata Alam & Budaya, Desa Wisata Way Kalam menawarkan  kegiatan wisata pengalaman berupa pembelajaran dan interaksi tentang alam, lingkungan hidup, pertanian, perkebunan, wirausaha, kehidupan sosial budaya, aneka seni tradisi dan kearifan lokal yang  masih mengakar kuat di masyarakat dengan suasana khas pedesaan di lereng Gunung Rajabasa.</p>
                    <p class="text-base md:text-[14px]">Perjalanan Desa Wisata Way Kalam diawali pada tahun 1999  sebagai salah satu desa yang memiliki potensi banyak wisata ada di lereng gunung Rajabasa, namun belum dimanfaatkan oleh warga sekitar dengan baik, dengan semangat gotong royong dalam merawat alam, lingkungan hidup dan kearifan lokal yang diajarkan dan dilakukan oleh tokoh masyarakat generasi sebelumnya, telah membuahkan hasil dengan melimpahnya kekayaan alam, vegetasi, hasil bumi  dan kehidupan sosial budaya masyarakat pedesaan yang tetap terjaga dengan baik hingga saat ini.</p>
                </td>
            </tr>

            <tr>
                <td class="flex justify-center md:hidden py-6">
                    <h2 class="font-bigShoulders font-black text-[20px] md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2015</h2>
                </td>
            </tr>
            <tr>
                <td class="md:flex justify-start hidden pt-6 md:pt-20">
                    <h2 class="font-bigShoulders font-black md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2015</h2>
                </td>
                <td class="md:pt-20 md:ps-40 space-y-6 text-justify">
                    <p class="text-base md:text-[14px]">Banyak hal menarik yang bisa anda temukan di Lampung Selatan. Kabupaten Serambi Sumatera ini memiliki sejuta potensi wisata yang siap untuk anda kunjungi</p>
                    <p class="text-base md:text-[14px]">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan. Berlokasi di kawasan lereng gunung Rajabasa (salah satu gunung yang terkenal di Kabupaten Lampung Selatan) Jarak tempuh 17 km dari pusat Kota Kalianda/Ibukota Kabupaten Lampung Selatan dengan jarak tempuh 26 Menit, serta berlokasi di ketinggian 372 m dpl.</p>
                    <p class="text-base md:text-[14px]">Mengangkat tema Desa Wisata Alam & Budaya, Desa Wisata Way Kalam menawarkan kegiatan wisata pengalaman berupa pembelajaran dan interaksi tentang alam, lingkungan hidup, pertanian, perkebunan, wirausaha, kehidupan sosial budaya, aneka seni tradisi dan kearifan lokal yang masih mengakar kuat di masyarakat dengan suasana khas pedesaan di lereng Gunung Rajabasa.</p>
                    <p class="text-base md:text-[14px]">Perjalanan Desa Wisata Way Kalam diawali pada tahun 1999 sebagai salah satu desa yang memiliki potensi banyak wisata ada di lereng gunung Rajabasa, namun belum dimanfaatkan oleh warga sekitar dengan baik, dengan semangat gotong royong dalam merawat alam, lingkungan hidup dan kearifan lokal yang diajarkan dan dilakukan oleh tokoh masyarakat generasi sebelumnya, telah membuahkan hasil dengan melimpahnya kekayaan alam, vegetasi, hasil bumi dan kehidupan sosial budaya masyarakat pedesaan yang tetap terjaga dengan baik hingga saat ini.</p>
                    <p class="text-base md:text-[14px]">
                        Pada awal tahun 2015an kami Pemuda/I dan Masyarakat Desa Wat Kalam mulai bergerak membangun mimpi kami dengan mulai melangkah kecil dengan mimpi untuk memberi nilai tambah pada kehidupan sosial, ekonomi dan budaya masyarakat desa, namun dengan tetap mempertahankan tradisi, kearifan lokal dan budaya masyarakat. Dan harus berani membuka diri dan membangun interaksi positif dengan masyarakat dari luar.
                    </p>
                    <p class="text-base md:text-[14px]">
                        Dengan Segala keterbatasan dan hanya bermodal semangat dan dukungan berbagai pihak, Baik dari Pemerintah Desa, Daerah dan sebagainya kami Pemuda/I (Pokdarwis) memberanikan membangun desa wisata Way Kalam dengan harapan ingin maju sejajar dengan desa-desa lainnya yang ada di indonesia.
                    </p>
                    <p class="text-base md:text-[14px]">
                        Adapun latar belakang dalam mengembangkan desa wisata adalah kami menilai bahwa pendekatan dengan melalui desa wisata akan mampu memberikan efek yang luar biasa bagi masyarakat, karena dengan desa wisata akan dapat mengakomodasi semua komponen masyarakat untuk aktif bergerak sebagai pelaku utama (subyek) dan bukan hanya sebagai obyek.  Selain itu kami juga akan dapat mengajak berbagai pihak lain, baik pemerintah, swasta maupun perguruan tinggi untuk berpartisipasi aktif dalam membangun desa wisata.
                    </p>
                    <p class="text-base md:text-[14px]">
                        Saat itu juga kami mulai menata diri, mengelola dan melestarikan lingkungan dan mengajak masyarakat bersama-sama untuk memiliki kebanggaan terhadap desanya sendiri. Mengawali kegiatan ini bukan hal yang mudah karena kami membangun tanpa bermodalkan materi dan adanya perubahan budaya petani menjadi penyedia jasa wisata. Namun  dengan dukungan dan kepercayaan penuh dari masyarakat dan pemerintah dengan berbagai programnya, membuat masyarakat mampu merencanakan, melaksanakan dan mengawasi serta menikmati semua pembangunan yang dilakukan dari, oleh dan untuk masyarakat.
                    </p>
                    <p class="text-base md:text-[14px]">
                        Dengan jumlah penduduk 1184 jiwa (351 KK), desa wisata Way Kalam pada saat awal belum mampu mengandalkan desa wisata sebagai salah satu upaya mengangkat taraf ekonomi dan pendapatan masyarakat karena keterbatasan dalam kemampuan sumberdaya manusia, sarana dan prasarana pendukung, keterampilan maupun pembuatan paket wisata. Selain itu juga belum mampu memasarkan dengan baik paket wisata yang dibuat.  Pada tahun 2015 belum terdapat sarana dan prasarana yang memadai sebagai salah satu pendukung pariwisata.  Saat itu hanya terdapat 5 homestay, lapangan seadanya sebagai tempat kemah dan out bond. Pemandu kegiatan dan atraksi belum percaya diri karena belum memiliki kemampuan dan identitas diri.  Pada tahun 2015 jumlah tamu yang berkunjung belum mencapai 1.000 orang.
                    </p>
                </td>
            </tr>

            <tr>
                <td class="flex justify-center md:hidden py-6">
                    <h2 class="font-bigShoulders font-black text-[20px] md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2019</h2>
                </td>
            </tr>
            <tr>
                <td class="md:flex justify-start hidden pt-6 md:pt-20">
                    <h2 class="font-bigShoulders font-black md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2019</h2>
                </td>
                <td class="md:pt-20 md:ps-40 space-y-6 text-justify">
                    <p class="text-base md:text-[14px]">Pada tahun 2019 Desa Wisata Way Kalam mulai untuk berbenah mendapatkan pendampingan dari berbagai pihak yang memberikan program peningkatan sarana dan prasarana perkemahan seperti perbaikan aula, kamar mandi, lapangan parkir dan peningkatan akses jalan masuk yang ada. Dengan adanya program tersebut maka tamu yang berkunjung mulai meningkat signifikan dan mencapai 3.000 orang dengan pemasukan yang cukup besar.</p>
                </td>
            </tr>

            <tr>
                <td class="flex justify-center md:hidden py-6">
                    <h2 class="font-bigShoulders font-black text-[20px] md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2020</h2>
                </td>
            </tr>
            <tr>
                <td class="md:flex justify-start hidden pt-6 md:pt-20">
                    <h2 class="font-bigShoulders font-black md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2020</h2>
                </td>
                <td class="md:pt-20 md:ps-40 space-y-6 text-justify">
                    <p class="text-base md:text-[14px]">Tahun 2020 mendapatkan program dan bantuan digunakan untuk fasilitasi pelatihan SDM, seragam pemandu, penambahan sarana kesenian, kuliner dan cinderamata. Dengan Program Dana Desa ternyata mampu mempercepat upaya peningkatan sarana dan prasarana desa wisata, sehingga pada tahun 2020 kami telah memiliki homestay 30 rumah yang sudah bekerjasama dengan pihak OYYO, pemesanan sudah bisa melakukan pemesanan kamar homestay secara online , beraneka atraksi pertanian, seni budaya dan kuliner serta pelayanan yang mulai tertata baik.</p>
                </td>
            </tr>

            <tr>
                <td class="flex justify-center md:hidden py-6">
                    <h2 class="font-bigShoulders font-black text-[20px] md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2021</h2>
                </td>
            </tr>
            <tr class="py-20">
                <td class="md:flex justify-start hidden pt-6 md:pt-20">
                    <h2 class="font-bigShoulders font-black md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2021</h2>
                </td>
                <td class="md:pt-20 md:ps-40 space-y-6 text-justify">
                    <p class="text-base md:text-[14px]">Pada tahun 2021 jumlah tamu mencapai < 3.000 orang dari target> 5.000 orang. Keterlibatan masyarakat yang demikian besar dalam kegiatan Desa wisata Way Kalam merupakan sebuah proses yang terbentuk secara alami dimana Desa wisata Way Kalam mampu memberikan manfaat bagi masyarakatnya. Keterlibatan kaum perempuan dan pemudanya merupakan modal yang sangat berharga bagi keberlangsungan dan keberlanjutan Dewi Peri dimasa mendatang.</p>
                </td>
            </tr>

            <tr>
                <td class="flex justify-center md:hidden py-6">
                    <h2 class="font-bigShoulders font-black text-[20px] md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2022 - 2023</h2>
                </td>
            </tr>
            <tr class="py-20">
                <td class="md:flex justify-start hidden pt-6 md:pt-20">
                    <h2 class="font-bigShoulders font-black md:text-[32px] bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">2022 - 2023</h2>
                </td>
                <td class="md:pt-20 md:ps-40 space-y-6 text-justify">
                    <p class="text-base md:text-[14px]">Pada tahun 2022, Desa wisata Way Kalam kami anggap telah mampu memberdayakan sebagian besar anggota masyarakat (> 70%), dengan berbagai kelompok yang terlibat, seperti homestay (50 homestay/120 kamar), atraksi seni dan budaya (25 orang), pemandu wisata lokal/pemuda (20 orang), kuliner lokal (20 orang), home industri (5 orang), warung kelontong (6 unit) dan tenaga keamanan/pendukung (30 orang). Kami juga mampu memanfaatkan lahan desa yang terlantar menjadi tempat untuk pembudidayaa Lebah madu Peternakan Kambing (1 ha) Dan Air Terjun Way Kalam yang menjadi Icon Wisata yang ada di Desa Way Kalam . Daerah Aliran Sungai (DAS) dari air terjun way kalam menjadi area petualangan/tracking yang menarik bagi tamu, Selain itu kami juga telah bekerjasama dengan beberapa pihak di dalam desa seperti kelompok tani pemuda, perkebunan, pertanian, wanita tani, dsb. Kerjasama dengan pihak luar seperti Pemerintah Desa dengan tanah kas desa, kelompok kesenian, kelompok peternak.</p>
                    <p class="text-base md:text-[14px]">Pada saat ini (tahun 2022/2023) setelah mendapatkan pendampingan, bantuan pengembangan SDM dan fasilitas pariwisata dari berbagai pihak tingkat kunjungan wisatawan sudah stabil pada jumlah sekitar 5.000 orang per tahun dan pendapatan rata-rata mencapai Rp. 2.000.000 – Rp. 5.000.000/bulan.</p>
                    <p class="text-base md:text-[14px]">Dengan visi dan misi upaya pemberdayakan ekonomi dan sosial budaya masyarakat dengan tetap menjaga kearifan lokal, ke depan pengembangan Air Terjun akan diarahkan pada upaya-upaya pelestarian alam dan lingkungan secara berkelanjutan dengan tetap menjaga nilai luhur kehidupan sosial budaya pedesaan yang mampu dijadikan tontonan dan tuntunan bagi masyarakat lokal dan masyarakat di wilayah lainnya. </p>
                    <p class="text-base md:text-[14px]">Dalam kurun waktu 8 tahun ini banyak pencapaian impian yang sudah terwujud, dimana kami mampu memberikan peluang pada masyarakat untuk mendapatkan tambahan pendapatan dan peningkatan ekonomi tanpa keluar dari desa, tanpa harus merusak lingkungan, mampu mencegah arus urbaninsasi bagi generasi muda, memberdayakan kelompok perempuan dan tumbuhnya berbagai kegiatan ekonomi produktif serta terpeliharanya budaya masyarakat setempat. </p>
                </td>
            </tr>
        </table>
    </section>

    <section class="p-6 md:p-20 bg-[#EBFAFD] flex justify-center flex-col w-full">
        <div class="flex justify-center flex-col">
            <p class="uppercase text-[14px] md:text-[32px] font-bigShoulders font-black text-center bg-gradient-to-br from-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PENGHARGAAN</p>
            <p class="uppercase text-[20px] md:text-[64px] font-bigShoulders font-black text-center text-[#132758]">apresiasi dan Pelatihan serta kunjungan tamu dari berbagai instansi/lembaga dan dari berbagai pihak, baik berupa materi maupun pengakuan administratif</p>
        </div>
        <div class="py-6 flex flex-wrap justify-between gap-6 md:gap-20">
            <?php
                $sql = mysqli_query($mysqli, "SELECT * FROM penghargaan");
                while($res = mysqli_fetch_array($sql)){
                    ?>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <img class="rounded-lg p-6" src=<?php echo "./gambar_penghargaan/".$res['gambar']?> alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $res['headline'] ?></h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700"><?php echo $res['deskripsi']?></p>
                            </div>
                        </div>
                    <?php
                }
            ?>

        </div>
    </section>

    <?php include "footer.php"?>
</body>

</html>