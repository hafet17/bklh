
	<form action="/alat/update" method="post">
		<input type="text" name="nama" value="<?= $alat->nama; ?>">
		<input type="number" name="qty" value="<?= $alat->qty; ?>">
		<input type="hidden" name="id" value="<?= $alat->idalat; ?>">
		<button type="submit">Simpan</button>
	</form>
