<?php 
include '../../../koneksi.php';
$id_kategori = $_GET['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$harga_jasa = $_POST['harga_jasa'];	
 	
 		$query = "SELECT * FROM kategori WHERE id_kategori='".$id_kategori."'";
 		$sql = mysqli_query($koneksi, $query);
 		$data = mysqli_fetch_array($sql);
	
		$query = "UPDATE kategori SET nama_kategori='".$nama_kategori."',harga_jasa='".$harga_jasa."' WHERE id_kategori='".$id_kategori."'";
 		$sql = mysqli_query($koneksi, $query);	

 		if ($sql) {
 			header("location:../pages/teknisi.php?pesan=updatedata");
 		}
 		// else{
		
		// $query = "UPDATE kategori SET nama_kategori='".$nama_kategori."',harga_jasa='".$harga_jasa."' WHERE id_teknisi='".$idTeknisi."'";
 		// $sql = mysqli_query($koneksi, $query);

 		// if ($sql) {
 		// 	header("location:../pages/teknisi.php");
 		// }
		 else{
 			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
 			echo "<br><a href='form_ubah.php'>Kembali ke form</a>";
 		}
// }
 ?>
