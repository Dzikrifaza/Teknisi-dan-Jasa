<?php
session_start();
include 'koneksi.php';
$username= $_POST['username'];
$password= $_POST['password'];

$login= mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data["id_level"]=="1"){
		$_SESSION['username'] = $data["username"];
		$_SESSION["id_level"] = "1";
		header("location:src/admin/admin.php");
	}
	else if($data["id_level"]=="3"){
		$_SESSION['username'] = $data["username"];
		$_SESSION["id_level"] = "3";
		header("location:main.php?pesan=login");
	}else{
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>