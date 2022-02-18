<!DOCTYPE html>
<html>

<head>
    <title>Simpan Data</title>
    <link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.min.css">
</head>

<body class="p-3 mb-2 bg-info text-light" style="margin-top: 100px;">
    <center>

    <?php
    session_start();
    if($_SESSION["id_level"]==""){
      header("location:../../../login.php?pesan=");
    }
?>
        <?php
		include "../../../koneksi.php";
		$sql="select * from kategori";
		$hasil=mysqli_query($koneksi,$sql);
	?>
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
                                <td>Id Teknisi</td>
                                <td><input size="25" class="form-control" type="text" name="id_teknisi"></td>
                            </tr>

                            <tr>
                                <td>Nama Teknisi</td>
                                <td><input size="25" class="form-control" type="text" name="nama_teknisi"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input size="25" class="form-control" type="text" name="alamat"></td>
                            </tr>

                            <tr>
                                <td>No Telp</td>
                                <td><input size="25" class="form-control" type="text" name="no_telp"></td>
                            </tr>

                            <tr>
                                <td>Id Kategori</td>
                                <td>
                                    <select class="custom-select" name="kategori">
                                        <option>Pilih Id</option>
                                        <?php
                                            $sql = mysqli_query($koneksi, "SELECT id_kategori From kategori");
                                            $row = mysqli_num_rows($sql);
                                            while ($row = mysqli_fetch_array($sql)){
                                            echo "<option value='". $row['id_kategori'] ."'>" .$row['id_kategori'] ."</option>" ;
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Keterangan Id Kategori <br>
                                <?php
                                            $sql = mysqli_query($koneksi, "SELECT id_kategori,nama_kategori From kategori");
                                            
                                            if (mysqli_num_rows($sql) > 0) {
                                                while($row = mysqli_fetch_assoc($sql)) {
                                                  echo "id : " . $row["id_kategori"]. " - Nama: " . $row["nama_kategori"]. "<br>";
                                                }
                                              }
                                ?>
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