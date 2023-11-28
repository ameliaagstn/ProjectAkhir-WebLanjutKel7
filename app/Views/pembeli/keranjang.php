<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="2">
			<tr>
				<th>Id</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
				
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