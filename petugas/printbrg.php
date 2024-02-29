<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container bg-secondary-subtle">
<div class="card mt-2">
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Stok</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include '../koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from produk");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['NamaProduk']; ?></td>
						<td><?php echo "Rp. " . number_format($d['Harga'], 0, ',', '.'); ?></td>
						<td><?php echo $d['Stok']; ?></td>
					</tr>
					</div>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</div>
<script>
 window.print();
 </script>

</body>
</html>