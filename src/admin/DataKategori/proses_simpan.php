<?php 
	include '../../../koneksi.php';

	$idKategori = $_POST['id_kategori'];
	$namaKategori = $_POST['nama_kategori'];
	$hargaJasa = $_POST['harga_jasa'];

	$query = "INSERT INTO kategori VALUES ('".$idKategori."','".$namaKategori."','".$hargaJasa."')";
 		$sql = mysqli_query($koneksi, $query);
 		if ($sql) {
 			header("location:../pages/teknisi.php?pesan=tambahdata");
 		}else{
 			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
 			echo "<br><a href='form_simpan.php'>Kembali ke form</a>";
 		}
 	
 ?>