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

	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Merk</th>
			<th>Tahun Terbit</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Gambar</th>
			<th colspan="2">Opsi</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM motor")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['merk']; ?></td>
			<td><?php echo $data['tahunterbit']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['stok']; ?></td>
			<td><img src="files/<?php echo $data['gambar'] ?>" width="400px" height="250px"></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
				<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
