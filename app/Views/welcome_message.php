<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Barang Antik</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
</head>
<body>
    <header>
        <nav>
        <img src="<?=base_url('assets/img/logo_antiqu.png')?>" alt="Logo" width="75px">
            <div class="logo">E-Commerce Barang Antik</div>
            <ul>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href=<?= url_to('login') ?>>Masuk</a></li>
            </ul>
        </nav>
    </header>

    <section id="">
        <h1>Selamat Datang di E-Commerce Barang Antik</h1>
        <p>Temukan barang-barang antik yang langka dan bersejarah.</p>
        <a href="#products" class="cta-button">Lihat Produk</a>
    </section>

    <section id="about">
        <h2>Tentang Kami</h2>
        <p>Kami adalah toko online yang mengkhususkan diri dalam barang-barang antik. Produk kami berasal dari berbagai penjuru dunia dan merupakan koleksi langka yang memiliki nilai sejarah dan keindahan tersendiri.</p>
    </section>

    <section id="products">
        <h2>Produk Kami</h2>
        <div class="product-card">
            <img src="<?=base_url('assets/img/produk 1.jpg')?>" alt="Barang Antik 1" width="200px">
            <h3>Barang Antik 1</h3>
            <p>Harga: Rp.2.500.000</p>
            <button class="buy-button">Beli Sekarang</button>
        </div>
        <div class="product-card">
            <img src="<?=base_url('assets/img/produk 2.jpg')?>" alt="Barang Antik 2" width="200px">
            <h3>Barang Antik 2</h3>
            <p>Harga: Rp.1.500.000</p>
            <button class="buy-button">Beli Sekarang</button>
        </div>
    </section>

    <section id="contact">
        <h2>Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui formulir di bawah ini.</p>
        <form>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button class="submit-button" type="submit">Kirim Pesan</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 E-Commerce Barang Antik</p>
    </footer>
</body>
</html>