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
	$id_kategori = $_GET['id_kategori'];
	$sql="select * from kategori WHERE id_kategori='".$id_kategori."'";
	$hasil=mysqli_query($koneksi,$sql);
	$data = mysqli_fetch_array($hasil);
	?>
	 <form method="post" action="proses_ubah.php?id_kategori=<?php echo $id_kategori;?>" enctype="multipart/form-data">
	 	
	 	<table cellpadding="8">
	 		<tr>
	 			<td>Id Teknisi</td>
	 			<td><input size="25" type="text"  class="form-control" name="id_kategori" value="<?php echo $data['id_kategori']?>" disabled=""></td>
	 		</tr>
	 		<tr>
	 			<td>Nama Kategori</td>
	 			<td><input size="25" type="text"  class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori']?>";></td>
	 		</tr>
	 		<tr>
	 			<td>Harga Jasa</td>
	 			<td><input size="25" type="text"  class="form-control" name="harga_jasa" value="<?php echo $data['harga_jasa'];?>"></td>
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