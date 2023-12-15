<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antiqu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/components/carousel/">
    <link rel="stylesheet" href="https://www.w3.org/TR/wai-aria/roles#listbox">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Data Penjual</h1>
    <form action="<?= base_url('/penjual/' . $penjual['id']) ?>" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
            <label for="user_image" class="form-label">Foto :</label>
            <img src="<?= $user ['user_image'] ?? '<default-foto>' ?>">
            <input type="file" class="form-control" name="user_image" id="user_image">
        </div>
        
        <div class="mb-3">
    <label for="username" class="form-label">Username :</label>
    <input type="text" class="form-control" name="username" value="<?= $penjual['username'] ?? '' ?>" id="username">
    <div class="invalid-feedback">
        <?php ?>
    </div>
</div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap :</label>
            <input type="text" class="form-control <?php ?>"
            name="nama" value="<?= $penjual ['nama'] ?>" id="nama"   >
                <div class="invalid-feedback">
                    <?php ?>
                </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="text" class="form-control <?php ?>"  
                    value="<?= $penjual['email'] ?>" name="email" id="email">
                    <div class="invalid-feedback">
                    <?php ?>
                </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat :</label>
            <input type="text" class="form-control <?php ?>"  
                    value="<?= $penjual['alamat'] ?>" name="alamat" id="alamat">
                    <div class="invalid-feedback">
                    <?php ?>
                </div>
        </div>
       
        <input type="hidden" name="_method"value="PUT">
        <? csrf_field() ?>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>