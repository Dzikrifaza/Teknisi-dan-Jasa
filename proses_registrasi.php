<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="src/bootstrap5/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	
<?php 
	include 'koneksi.php';

	// $idUser = $_POST['id_user'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO users VALUES (NULL,'".$username."','".$password."','".$email."','3')";
 		$sql = mysqli_query($koneksi, $query);
 		if ($sql) {
			header("location:login.php?pesan=gagal");
			header("location:login.php?pesan=berhasilregis");
 		}else{
 			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data";
 			echo "<br><a href='regis.php'>Kembali ke form</a>";
 		}
 	
 ?>
		
</body>
</html>