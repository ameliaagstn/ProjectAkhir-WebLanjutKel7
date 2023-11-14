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
<div class="container">
  <div class="row">
    <h3 class="mt-5">DATA USER</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Email</td>
          <td>Username</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['username'] ?></td>
            <td>
            <a class="btn btn-primary" href="<?= base_url('/listuser/' . $user['id'] . '/profile' ) ?>">Detail</a>
            <a class="btn btn-warning" href="<?= base_url('/listuser/' . $user['id'] . '/edit') ?>">Edit</a>
            <form action="<?= base_url('/listuser/' .  $user['id']) ?>" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <?= csrf_field() ?>
              <button type="submit" class="btn btn-danger" >Delete</button>
              </form>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>