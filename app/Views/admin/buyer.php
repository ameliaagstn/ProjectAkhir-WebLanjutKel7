<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
</head>
<body>
    <h1>Data Pembeli</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pembeli</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
        <?php foreach ($buyers as $buyer) : ?>
            <tr>
                <td><?= $p['id']; ?></td>
                <td><?= $p['nama']; ?></td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>