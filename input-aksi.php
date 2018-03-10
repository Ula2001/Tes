<?php
include 'koneksi.php';
$merk = $_POST['merk'];
$tahunterbit = $_POST['tahunterbit'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$nama_file   = $_FILES['gambar']['name'];


$foto = date('dmYHis').$nama_file;
$folder = "files/".$foto;
$querytambah = mysqli_query($koneksi, "INSERT INTO motor(merk, tahunterbit, harga, stok, gambar) VALUES( '$merk', '$tahunterbit' , '$harga', '$stok', '$foto')") or die(mysqli_error());
  if (move_uploaded_file($lokasi_file,"$folder")) {
   echo "Nama File : <b>$nama_file</b> sukses di upload";
  }
  else {
  echo "File tidak bisa di upload";
  }


mysql_query("INSERT INTO motor VALUES('','$merk','$tahunterbit','$harga','$stok','$gambar')");

header("location:index.php?pesan=input");
?>
