<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $pr['id']; ?></td>
                <td><?= $pr['nama_produk']; ?></td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>