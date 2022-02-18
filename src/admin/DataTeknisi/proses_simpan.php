<?php 
	include '../../../koneksi.php';

	$idTeknisi = $_POST['id_teknisi'];
	$namaTeknisi = $_POST['nama_teknisi'];
	$alamatTeknisi = $_POST['alamat'];
	$kategoriID = $_POST['kategori'];	
	$noTelp = $_POST['no_telp'];	

	$query = "INSERT INTO teknisi VALUES ('".$idTeknisi."','".$namaTeknisi."','".$alamatTeknisi."','".$noTelp."','".$kategoriID."')";
 		$sql = mysqli_query($koneksi, $query);
 		if ($sql) {
 			header("location:../pages/teknisi.php?pesan=tambahdata");
 		}else{
 			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
 			echo "<br><a href='form_simpan.php'>Kembali ke form</a>";
 		}
 	
 ?>