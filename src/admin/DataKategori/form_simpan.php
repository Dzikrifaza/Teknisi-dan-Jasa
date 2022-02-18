<!DOCTYPE html>
<html>

<head>
    <title>Simpan Data</title>
    <link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.min.css">
</head>

<body class="p-3 mb-2 bg-info text-light" style="margin-top: 100px;">

<?php
    session_start();
    if($_SESSION["id_level"]==""){
      header("location:../../../login.php?pesan=");
    }
?>
    <center>
        <table border="0" cellpadding="14" bgcolor="EE5A24" style="border-radius: 15px;">
            <tr>
                <td>

                    <h1>
                        <center>Tambah Data</center>
                    </h1>
                    <hr>
                    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
                        <table cellpadding="8">
                            <tr>
                                <td>Id Kategori</td>
                                <td><input size="25" class="form-control" type="text" name="id_kategori"></td>
                            </tr>

                            <tr>
                                <td>Nama Kategori</td>
                                <td><input size="25" class="form-control" type="text" name="nama_kategori"></td>
                            </tr>
                            <tr>
                                <td>Harga Jasa</td>
                                <td><input size="25" class="form-control" type="number" name="harga_jasa"></td>
                            </tr>
                        </table>
                        <hr>
                        <button type="submit" class="btn btn-primary"
                            style="border-radius: 15px; border: 50px;  margin-left: 220px;">Submit</button>
                        <a href="../admin.php">
                            <button type="button" class="btn btn-primary"
                                style="border-radius: 15px; border: 50px;">Batal</button>
                    </form>
                    </a>
                </td>
            </tr>
    </center>
</body>
</table>

</html>