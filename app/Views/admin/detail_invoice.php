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
</head>
<body>
<header>
        <nav>
            <img src="<?=base_url('assets/img/logo_antiqu.png')?>" alt="Logo" width="75px">
            <!-- <div class="logo">Beranda</div> -->
            <ul>
                <li><a href="#about" style="color: #ffffff">Beranda</a></li>
                <li><a href="#products" style="color: #ffffff">Pemberitahuan</a></li>
                <li><a href="#contact" style="color: #ffffff">Bantuan</a></li>
                <!-- <li><a href="#keranjang" style="color: #ffffff">Keranjang</a></li> -->
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>

            <a href="#cart" class="fa" style="font-size:30px"> &#xf07a; </a>

            <img class="avatar" src="<?=base_url('assets/img/pentol1.jpg')?>" alt="avatar">

        </nav>
</div>
</header>
    <center>
    <h1>Detail Pesanan</h1>
        <table border="1">
            <tr>
                <th>Fullname</th>
                <td><?= $data['fullname']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $data['alamat']; ?></td>
            </tr>
            <tr>
                <th>Metode Pengiriman</th>
                <td><?= $data['metode_pengiriman']; ?></td>
            </tr>
            <tr>
                <th>Kota</th>
                <td><?= $data['kota']; ?></td>
            </tr>
            <tr>
                <th>Kode Pos</th>
                <td><?= $data['kode_pos']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $data['email']; ?></td>
            </tr>
            <tr>
                <th>Telfon</th>
                <td><?= $data['telfon']; ?></td>
            </tr>
            <tr>
                <th>Jumlah item</th>
                <td><?= $data['jumlah_item']; ?></td>
            </tr>
            <tr>
                <th>Total Bayar</th>
                <td><?= $data['total_bayar']; ?></td>
            </tr>
            <tr>
                <th>Bukti Pembayaran</th>
                <td><?= $data['bukti_pembayaran']; ?></td>
            </tr>
            <tr>
                <th>Status Pembayaran</th>
                <td><?= $data['status_pembayaran']; ?></td>
            </tr>
        </table>
</body>
</center>
</body>
</html>