<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antiqu</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/stylesheet.css')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/components/carousel/">
    <link rel="stylesheet" href="https://www.w3.org/TR/wai-aria/roles#listbox">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

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
                <li><a href="/keranjang">Keranjang</a></li>
                <li><a href="/admin">Profil Penjual</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
    <div style="text-align:center;">
        <h1>Profil Penjual</h1>
        <div class="buyer-info">
        <?= csrf_field() ?>
        <?php foreach ($penjuals as $penjual) : ?>
        <img src="<?=$penjual['user_image'] ; ?>" alt="Foto Profil Penjual" width="200px">

    <div class="penjual-item">
       
        <h3>Detail Penjual</h3>
        <p>Username: <?= $penjual['username'] ?></p>
        <p>Nama Lengkap: <?= $penjual['nama'] ?></p>
        <p>Email: <?= $penjual['email'] ?></p>
        <p>Alamat: <?= $penjual['alamat'] ?></p>
        <a class="btn btn-warning" href="<?= base_url('penjual/' . $penjual['id'] . '/edit') ?>">Edit</a>
            <form action="<?= base_url('/profile_penjual/' .  $penjual['id']) ?>" method="post">
    </div>
</div>
            </form>
    </div>
<?php endforeach; ?>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 E-Commerce Barang Antik</p>
    </footer>
</body>
</html>