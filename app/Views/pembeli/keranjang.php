<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?=base_url('assets/css/stylesheet.css')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/components/carousel/">
    <link rel="stylesheet" href="https://www.w3.org/TR/wai-aria/roles#listbox">
    <link href="<?= base_url('assets/css/style2.css')?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <img class="logo" src="<?=base_url('assets/img/logo_antiqu.png')?>" alt="Logo" width="100px">
            <!-- <div class="logo">Beranda</div> -->
            <ul class="tulisan">
                <li><a href="<?= base_url('pembeli/dashboard')?>" style="color: #ffffff">Beranda</a></li>
                <li><a href="#products" style="color: #ffffff">Pemberitahuan</a></li>
                <li><a href="#contact" style="color: #ffffff">Bantuan</a></li>
                <!-- <li><a href="#keranjang" style="color: #ffffff">Keranjang</a></li> -->
            </ul>

            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form> -->

            <!-- <a href="<?= base_url('/pembeli/keranjang')?>" class="fa" style="font-size:30px"> &#xf07a; </a> -->

            <img class="avatar" src="<?=base_url('assets/img/pentol1.jpg')?>" alt="avatar">

        </nav>
</div>
    </header>

<div class="container">
  <div class="row">
    <h3 class="mt-5"></h3>
    <table class="table table-striped">
			<tr>
				<th>No.</th>
				<!-- <th>Gambar</th> -->
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
				<td>Hapus</td>
				
			</tr>
			<?php foreach ($keranjang as $keranjang) { ?>
				<tr>
					<td><?= $keranjang['id'] ?></td>
					<td><?= $keranjang['nama_barang'] ?></td>
					<td><?= $keranjang['jumlah'] ?></td>
					<td><?= $keranjang['total_harga'] ?></td>
					<td>
						<form action="<?= base_url('/pembeli/keranjang/' . $keranjang['id'])?>" method="post">
							<?= csrf_field()?>
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit"class="btn btn-danger btn-sm">Delete</button>
						</form>
						</td>
				</tr>
			<?php } ?>
		</table>
		
</body>
</html>