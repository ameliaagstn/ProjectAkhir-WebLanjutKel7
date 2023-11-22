<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="container alignment-items-center" 
    style="
        width: 90%;
        height: 100%;
        padding-top: 50px;
        "
> 

<?php $nama_barang = session()->getFlashdata('nama_barang');  ?>
        <form action="<?= base_url('penjual/create') ?>" method="post">
            <h3 style="text-align:center;">Masukkan Data Barang</h3>
            
            <div class="mb-3 row d-flex justify-content-center">
                <label for="nama_barang" class="col-sm-10 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input name="nama_barang" type="text" id="nama_barang" 
                    class="form-control"  
                    value="<?= old('nama_barang') ?>" >
                </div>
            </div>

            <div class="mb-3 row d-flex justify-content-center">
                <label for="deskripsi" class="col-sm-10 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input name="deskripsi" type="text" id="deskripsi"
                    class="form-control"  
                     value="<?= old('deskripsi') ?>" >
                    
                </div>
            </div>

            <div class="mb-3 row d-flex justify-content-center">
                <label for="foto_barang" class="col-sm-10 col-form-label">Foto Barang</label>
                <div class="col-sm-10">
                    <input class="form-control" 
                    type="file" id="foto_barang" name='foto_barang'>
                    
                </div>
            </div>
            
            <div class="mb-3 row d-flex justify-content-center">
                <label for="harga" class="col-sm-10 col-form-label">Harga Barang</label>
                <div class="col-sm-10">
                    <input name="harga" type="text" id="harga"
                    class="form-control"  
                     value="<?= old('harga') ?>" >
                </div>
            </div>

            <div style='margin-top:50px'></div>
            <div class="text-center">
                <!-- <button type="submit" class="btn btn-primary w-25 p-2">Submit</button> -->
                <a type="submit" class="btn btn-primary w-25 p-2" href="<?= base_url('penjual/list_barang') ?>">Submit</a>
            </div><br>
            

        </form>
    </div>

<?= $this->endSection()?>