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
            <a href="<?= base_url('penjual/profile') ?>">
            <img class="avatar" src="<?=base_url('assets/img/pentol1.jpg')?>" alt="avatar">

        </nav>
</div>
    </header>

    <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Orderan</p>
                        <h5 class="font-weight-bolder">
                          1.587 order
                        </h5>
                        <p class="mb-0">
                          <span class="text-success text-sm font-weight-bolder">+50%</span>
                          dari tahun lalu
                        </p>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Produk Terjual</p>
                        <h5 class="font-weight-bolder">
                          999 produk
                        </h5>
                        <p class="mb-0">
                          <span class="text-success text-sm font-weight-bolder">+50%</span>
                          dari tahun lalu
                        </p>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Harga Rata Rata</p>
                        <h5 class="font-weight-bolder">
                          5.478.000
                        </h5>
                        <p class="mb-0">
                          <span class="text-success text-sm font-weight-bolder"><br></span>
                          
                        </p>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Pengunjung</p>
                        <h5 class="font-weight-bolder">
                          999 pengunjung
                        </h5>
                        <p class="mb-0">
                          <span class="text-success text-sm font-weight-bolder">+10%</span>
                          dari kemarin
                        </p>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </main>

        <a class="buy-button w-18 p-2" href="<?= base_url('penjual/create') ?>">Tambah Produk</a><br><br>
        <a class="buy-button w-18 p-2" href="<?= base_url('penjual/list_barang') ?>">List Produk</a>

        <section id="products">
        <div class="product-card">
            <img src="<?=base_url('assets/img/produk 1.jpg')?>" alt="Barang Antik 1" width="200px">
            <h3>Guci Antik</h3>
            <p>Harga: Rp.2.500.000</p>
            <button class="buy-button">Detail Produk</button>
        </div>

        <div class="product-card">
            <img src="<?=base_url('assets/img/produk 2.jpg')?>" alt="Barang Antik 2" width="200px">
            <h3>Telepon Antik</h3>
            <p>Harga: Rp.1.500.000</p>
            <button class="buy-button">Detail Produk</button>
        </div>

        <div class="product-card">
            <img src="<?=base_url('assets/image/barang3.jpeg')?>" alt="Barang Antik 2" width="180px">
            <h3>Barang Antik 2</h3>
            <p>Harga: Rp.3.00.000</p>
            <button class="buy-button">Detail Produk</button>
        </div>
    </section>
     
    <br><br><br>

    <footer>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class=" " style="color: #ffffff">
                <p>&copy; 2023 E-Commerce Barang Antik</p>
            </div>
        </div>
        </div>
    </div>
    </footer>
</body>
</html>