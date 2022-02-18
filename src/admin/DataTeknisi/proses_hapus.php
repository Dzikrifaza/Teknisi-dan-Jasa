<?php 
	include '../../../koneksi.php';
	$idTeknisi = $_GET['id_teknisi'];
	$query = "SELECT * FROM teknisi WHERE id_teknisi='".$idTeknisi."' ";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
		$query2 = "DELETE FROM teknisi WHERE id_teknisi='".$idTeknisi."'";
		$sql2 = mysqli_query($koneksi, $query2);

		if ($sql2) {
			header("location:../pages/teknisi.php?pesan=hapusdata");
		
	}else{
		echo "Data Gagal dihapus. <a href='../admin.php'>Kembali</a>";
	}
 ?>