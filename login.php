<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="src/bootstrap5/css/bootstrap.min.css" />
</head>
<style type="text/css">
body {
    background-image: url(img/back4.png);
    background-repeat: no-repeat;
    background-size: cover;
}

#backlogin {
    background: white;
    width: 35%;
    height: 350px;
    border: 1px solid #d2d2d2;
    border-radius: 5px;
    margin-top: 150px;
}

@font-face {
    src: url('font/Product Sans Regular.ttf');
    font-family: Product Sans;
}

@font-face {
    src: url('font/OpenSans-Light.ttf');
    font-family: OpenSans-Light;
}

#backlogin form {
    margin-top: 15px;
    float: left;
    padding: 5px;
}

#backlogin .inputa {
    width: 90%;
    margin-top: 1px;
    height: 50px;
    border: 0px;
    border-bottom: 1px solid #f39c12;
    font-size: 16px;
    font-family: OpenSans-Light;
    background: transparent;
}

#backlogin .wed {
    margin-top: 40px;
    width: 45%;
    height: 40px;
    background: #f39c12;
    border: none;
    color: white;
    font-family: product sans;
    font-size: 20px;
    border-radius: 5px;
}

#backlogin h1 {
    text-align: center;
    padding: 5px;
    color: #f39c12;
    font-family: Product Sans;
}

#backlogin hr {
    width: 50%;
    height: 4px;
    border: none;
    background: #f39c12;
}
</style>

<body>
    <center>
        <div id="backlogin">
            <h1>Login</h1>
            <hr>
            
<?php 
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=="gagal") {
			echo '<div class="alert alert-danger" role="alert">Username dan password tidak sesuai !</div>';
		}
        elseif ($_GET['pesan']=="logout") {
			echo "<div class='alert alert-danger'> Berhasil Logout !</div>";
		}
        elseif ($_GET['pesan']=="berhasilregis") {
            echo '<div class="alert alert-success" role="alert">Berhasil Daftar, Silahkan Masuk</div>';
		}
        else{
			echo "<div class='alert alert-danger'>Anda Belum Login!</div>";
		}
	}
 ?>
            <form action="cek_login.php" method="post">
                <input type="text" class="inputa" name="username" value="" placeholder="Masukan Username">
                <input type="password" class="inputa" name="password" value="" placeholder="Masukan password">
                <input type="submit" class="wed" name="" value="Submit"> 
                <input type="reset" class="wed" name="" value="Reset"><p>Belum punya akun?<a href="regis.php" style="text-decoration:none;"> Registrasi</a></p>
                <a href="main.php" style="text-decoration:none;"><p>Kembali Ke Halaman Utama</p></a>
            </form>
        </div>
    </center>
    
</body>

</html>