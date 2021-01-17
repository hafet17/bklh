<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Alat</h1>
	<a href="alat/tambah">Tambah Alat</a>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($alat as $row):?>
				<tr>
					<td><?= $row['id']; ?></td>
					<td><?= $row['nama']; ?></td>
					<td><?= $row['qty']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>

