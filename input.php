<!DOCTYPE html>
<html>
<head>
	<title>Toko Online Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Toko Online Sederhana</h1>
	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Masukkan data baru</h3>
	<form action="input-aksi.php" method="post">
		<table>
			<tr>
				<td>Merk</td>
				<td><input type="text" name="merk"></td>
			</tr>
			<tr>
				<td>Tahun terbit</td>
				<td><input type="text" name="tahunterbit"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
