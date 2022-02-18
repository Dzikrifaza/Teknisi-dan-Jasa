<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
		<link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.min.css">

</head>
<body class="p-3 mb-2 bg-info text-dark" style="margin-top: 100px;"><center>
	
<?php
    session_start();
    if($_SESSION["id_level"]==""){
      header("location:../../../login.php?pesan=");
    }
?>
	<table bgcolor="fbc531" border="0" style="margin-left: 20px; border-radius: 15px;" cellpadding="10px">
		<tr><td>

	<h1><center>Ubah Data</center></h1><hr>
	
	<?php 
	
	include "../../../koneksi.php";
	$idTeknisi = $_GET['id_teknisi'];
	$sql="select * from teknisi WHERE id_teknisi='".$idTeknisi."'";
	$hasil=mysqli_query($koneksi,$sql);
	$no=0;
	while ($data = mysqli_fetch_array($hasil)) {
	$no++;
	 ?>
	 <form method="post" action="proses_ubah.php?id_teknisi=<?php echo $idTeknisi;?>" enctype="multipart/form-data">
	 	
	 	<table cellpadding="8">
	 		<tr>
	 			<td>Id Teknisi</td>
	 			<td><input size="25" type="text"  class="form-control" name="id_teknisi" value="<?php echo $data['id_teknisi']?>" disabled=""></td>
	 		</tr>
	 		<tr>
	 			<td>Nama Teknisi</td>
	 			<td><input size="25" type="text"  class="form-control" name="nama_teknisi" value="<?php echo $data['nama_teknisi']?>";></td>
	 		</tr>
	 		<tr>
	 			<td>Alamat</td>
	 			<td><input size="25" type="text"  class="form-control" name="alamat" value="<?php echo $data['alamat'];?>"></td>
	 		</tr>
	 		<tr>
	 			<td>No Telp</td>
	 			<td><input size="25" type="text"  class="form-control" name="no_telp" value="<?php echo $data['no_telfon'];?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Id Kategori</td>
	 			<td><select name="kategori" class="custom-select">
						<option selected=""><?php echo $data['id_kategori'];?></option>
						<?php echo $data['id_kategori'];?>
                        <?php } ?>
					</select></td>
	 		</tr>
	 	</table>
	 	<hr>
		<button type="submit" class="btn btn-primary" style="border-radius: 15px; border: 50px;  margin-left: 220px;">Submit</button>
	 	<a href="../pages/teknisi.php" >
		<button type="button" class="btn btn-primary" style="border-radius: 15px; border: 50px; ">Batal</button>
	 	</a>
	 </form>
	</td></tr>
	 </table>
</body>
</html>