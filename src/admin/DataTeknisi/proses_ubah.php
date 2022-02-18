<?php 
include '../../../koneksi.php';
$idTeknisi = $_GET['id_teknisi'];
$namaTeknisi = $_POST['nama_teknisi'];
$alamatTeknisi = $_POST['alamat'];	
$noTelp = $_POST['no_telp'];
$kategoriID = $_POST['kategori'];	

 	
 		$query = "SELECT * FROM teknisi WHERE id_teknisi='".$idTeknisi."'";
 		$sql = mysqli_query($koneksi, $query);
 		$data = mysqli_fetch_array($sql);
	
		$query = "UPDATE teknisi SET nama_teknisi='".$namaTeknisi."',alamat='".$alamatTeknisi."',no_telfon='".$noTelp."',id_kategori='".$kategoriID."' WHERE id_teknisi='".$idTeknisi."'";
 		$sql = mysqli_query($koneksi, $query);	

 		if ($sql) {
 			header("location:../pages/teknisi.php?pesan=updatedata");
 		}
 		// else{
		// $query = "UPDATE teknisi SET nama_teknisi='".$namaTeknisi."',alamat='".$alamatTeknisi."',no_telfon='".$noTelp."',id_kategori='".$kategoriID."' WHERE id_teknisi='".$idTeknisi."'";
 		// $sql = mysqli_query($koneksi, $query);

 		// if ($sql) {
 		// 	header("location:../pages/teknisi.php?pesan=updatedata");
 		// }
		 else{
 			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
 			echo "<br><a href='form_ubah.php'>Kembali ke form</a>";
 		}
// }
 ?>
