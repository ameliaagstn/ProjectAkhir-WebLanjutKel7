<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>
</head>
<body>
    <h1>Laporan Keuangan</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Keterangan</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
        <?php foreach ($financials as $financial) : ?>
            <tr>
                <td><?= $lk['id']; ?></td>
                <td><?= $lk['keterangan']; ?></td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>