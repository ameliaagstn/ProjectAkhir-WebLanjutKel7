<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="container alignment-items-center" 
    style="
        width: 90%;
        height: 100%;
        padding-top: 50px;
        "
>   

<h1 class="text-center" style="color: #717274;"> Edit Barang</h1>
    <?php $nama_barang = session()->getFlashdata('nama_barang'); ?>
    <form action="<?= base_url('/penjual/store' . $barang['id']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
             
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input name="nama_barang" type="text"  class="form-control <?= (empty(validation_show_error('nama_barang'))) ? '' : 'is-invalid' ?>"  value="<?= $barang['nama_barang'] ?>" id="nama_barang" placeholder="Ex : Guci Antik">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('nama_barang'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input name="deskripsi" type="text"  class="form-control <?= (empty(validation_show_error('deskripsi'))) ? '' : 'is-invalid' ?>"  value="<?= $barang['deskripsi'] ?>" id="deskripsi" placeholder="Ex : Dari tahun 1945">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('deskripsi'); ?>
                    </div>
                </div>

                <div class="mb-3 row d-flex justify-content-center">
                    <label for="foto_barang" class="col-sm-10 col-form-label">Foto Barang</label>
                    <div class="col-sm-10">
                        <input class="form-control <?= (empty(validation_show_error('foto_barang'))) ? '':'is-invalid' ?>" 
                        type="file" id="foto_barang" name='foto_barang'>
                        <div class="invalid-feedback">
                            <?= validation_show_error('foto_barang') ?>
                        </div>
                    </div>
                </div>

                
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input name="harga" type="text"  class="form-control <?= (empty(validation_show_error('harga'))) ? '' : 'is-invalid' ?>"  value="<?= $barang['harga'] ?>" id="harga" placeholder="Ex : 2.000.000">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('harga'); ?>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Update Barang</button>
                </div>
            </form>
    </div>

<?= $this->endSection()?>