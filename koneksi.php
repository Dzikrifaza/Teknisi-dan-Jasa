<?php 
$koneksi = mysqli_connect("localhost","root","","db_tubespw");
if(mysqli_connect_errno()) {
	echo "Koneksi DB Error".mysqli_connect_error();
}
 ?>