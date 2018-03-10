<!DOCTYPE html>
<html>
<head>
	<title>Toko Online Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM motor WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">
		<table>
			<tr>
				<td>Merk</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="merk" value="<?php echo $data['merk'] ?>">
				</td>
			</tr>
			<tr>
				<td>Tahun terbit</td>
				<td><input type="text" name="tahunterbit" value="<?php echo $data['tahunterbit'] ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input type="file" name="gambar" value="<?php echo $data['gambar']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
