<?php

include 'koneksi.php';
$id = $_POST['id'];
$merk = $_POST['merk'];
$tahunterbit = $_POST['tahunterbit'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];

mysql_query("UPDATE motor SET merk='$merk', tahunterbit='$tahunterbit', harga='$harga', stok='$stok', gambar='$gambar' WHERE id='$id'");

header("location:index.php?pesan=update");

?>
