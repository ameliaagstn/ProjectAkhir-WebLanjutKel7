<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin - E-Commerce Barang Antik</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
        <img src="<?=base_url('assets/img/logo_antiqu.png')?>" alt="Logo" width="75px">
            <div class="logo">E-Commerce Barang Antik</div>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/produk">Produk</a></li>
                <li><a href="/profil">Profil Admin</a></li>
            </ul>
        </nav>
    </header>

    <!-- Content -->
    <div class="container">
    <div style="text-align:center;">
        <h1>Profil Admin</h1>
        <div class="admin-info">
        <img src="<?=base_url('assets/img/avatar.jpg')?>" alt="Foto Profil Admin" width="200px">
            <h2>Nama Admin</h2>
            <p>Email: admin@example.com</p>
            <p>Alamat: Jalan Contoh No. 123</p>
            <p>Telepon: (123) 456-7890</p>
        </div>
    </div>

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">ADMIN</a></h1>
        <!-- <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div> -->
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#Tentang" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Data Pembeli</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Laporan Keuangan</span></a></li>
          <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Daftar Produk</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>ADMIN</h1>
      <p><span class="typed" data-typed-items="Dosen, Pembimbing, Kuliah Kerja Nyata, Universitas Lampung"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Tentang Section ======= -->
    <section id="Tentang" class="Tentang">
      <div class="container">

        <div class="section-title">
          <h2>Data Pembeli</h2>
          <!DOCTYPE html>
          <!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Pembeli</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Pembeli</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $mahasiswa = array(
                array('Nomor' => '1', 'Nama_Pembeli' => 'Sinta Nurhalifah', 'Alamat' => 'Wates', 'Jenis_Kelamin' => 'Perempuan'),
                array('Nomor' => '2', 'Nama_Pembeli' => 'Yola Okta Vina', 'Alamat' => 'Palas', 'Jenis_Kelamin' => 'Perempuan'),
            );

            foreach ($mahasiswa as $data) {
                echo "<tr>";
                echo "<td>" . $data['Nomor'] . "</td>";
                echo "<td>" . $data['Nama_Pembeli'] . "</td>";
                echo "<td>" . $data['Alamat'] . "</td>";
                echo "<td>" . $data['Jenis_Kelamin'] . "</td>";
                echo "<td>";
                echo "<button onclick='editMahasiswa(\"" . $data['Nomor'] . "\", \"" . $data['Nama_Pembeli'] . "\")'>Edit</button>";
                echo "<button onclick='hapusMahasiswa(\"" . $data['Nomor'] . "\")'>Hapus</button>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        function editMahasiswa(nim, nama) {
 
            alert("Edit mahasiswa dengan Nomor: " + nim + " dan Nama: " + nama);
        }

        function hapusMahasiswa(nim) {

            if (confirm("Apakah Anda yakin ingin menghapus pembeli dengan NIM: " + nim + "?")) {

                alert("Pembeli dengan NIM: " + nim + " telah dihapus.");
            }
        }
    </script>
</body>
</html>


    </section><!-- End Skills Section -->

    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Laporan Keuangan</h2>
          <?php


$isAdmin = true;


$laporanMahasiswa = [
    ['id' => 1, 'nama_produk' => 'Barang antik 1', 'harga_produk' => '2.500.000', 'jumlah_terjual' => '1', 'Keterangan' => 'isi keterangan'],
    ['id' => 2, 'nama_produk' => 'Barang antik 2', 'harga_produk' => '1.500.000', 'jumlah_terjual' => '1', 'Keterangan' => 'isi keterangan'],

];

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Jumlah Terjual</th>
            <th>Keterangan</th>
            <?php if ($isAdmin) : ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($laporanMahasiswa as $laporan) : ?>
            <tr>
                <td><?php echo $laporan['id']; ?></td>
                <td><?php echo $laporan['nama_produk']; ?></td>
                <td><?php echo $laporan['harga_produk']; ?></td>
                <td><?php echo $laporan['jumlah_terjual']; ?></td>
                <td><?php echo $laporan['Keterangan']; ?></td>
                <?php if ($isAdmin) : ?>
                    <td>
                        <a href="edit.php?id=<?php echo $laporan['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $laporan['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Hapus</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </section><!-- End Portfolio Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 E-Commerce Barang Antik</p>
    </footer>
</body>
</html>