<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="container alignment-items-center" 
    style="
        width: 90%;
        height: 100%;
        padding-top: 50px;
        "
> 

<div class="container">
  <div class="row">
    <h3 class="mt-5">DATA BARANG</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Nama Barang</td>
          <td>Deskripsi</td>
          <td>Foto Barang</td>
          <td>Harga</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($barang as $barang) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $barang['nama_barang'] ?></td>
            <td><?= $barang['deskripsi'] ?></td>
            <td><?= $barang['foto_barang'] ?></td>
            <td><?= $barang['harga'] ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url('penjual/list_barang' . $barang['id'] . '/edit') ?>">Edit</a>
                <form action="<?= base_url('penjual/list_barang' .  $user['id']) ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection()?>