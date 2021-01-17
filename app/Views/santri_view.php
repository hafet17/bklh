<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Santri</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Asrama</th>
				<th>Kamar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($santri as $row):?>
				<tr>
					<td><?= $row['id']; ?></td>
					<td><?= $row['nama']; ?></td>
					<td><?= $row['asrama']; ?></td>
					<td><?= $row['kamar']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>

