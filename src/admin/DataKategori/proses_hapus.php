<?php 
	include '../../../koneksi.php';
	$id_kategori = $_GET['id_kategori'];
	$query = "SELECT * FROM kategori WHERE id_kategori='".$id_kategori."' ";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
		$query2 = "DELETE FROM kategori WHERE id_kategori='".$id_kategori."'";
		$sql2 = mysqli_query($koneksi, $query2);

		if ($sql2) {
			header("location:../pages/teknisi.php?pesan=hapusdata");
		}else{
			echo "Data Gagal dihapus. <a href='../admin.php'>Kembali</a>";
		}
 ?>