<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    /* Penomoran otomatis pada baris */
    .css-serial {
        counter-reset: serial-number;
        /* Atur penomoran ke 0 */
    }

    .css-serial td:first-child:before {
        counter-increment: serial-number;
        content: counter(serial-number);
        /* Tampilan counter */
    }
    </style>
</head>
<body>
    
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Teknisi.xls");    
?>
     <table border="1" class="table table-striped banyak css-serial" width="99%">
                                            <thead>
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Id Teknisi</th>
                                                    <th>Nama Teknisi</th>
                                                    <th>Alamat</th>
                                                    <th>No Telpon</th>
                                                    <th>Id Kategori</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                        include "../../../koneksi.php";
                  
                        $sql = mysqli_query($koneksi, "SELECT * FROM teknisi");
                  
                        while($data = mysqli_fetch_array($sql)): ?>
                                                <tr>
                                                    <td align="center"></td>
                                                    <td>
                                                        <center><?= $data['id_teknisi'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $data['nama_teknisi'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $data['alamat'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $data['no_telfon'] ?></center>
                                                    </td>
                                                    <td>
                                                        <center><?= $data['id_kategori'] ?></center>
                                                    </td>
                                                </tr>
                                                <?php endwhile; ?>
                                            </tbody>

                                        </table>
</body>
</html>