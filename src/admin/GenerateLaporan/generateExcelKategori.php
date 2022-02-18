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
	header("Content-Disposition: attachment; filename=Data Kategori.xls");    
?>
     <table id="DataKategori"  border="0" class="table table-striped banyak" width="99%">
                                    <thead>
                                        <tr align="center">
                                            <th>Id Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Harga Jasa</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                        include "../../../koneksi.php";
                  
                        $sql = mysqli_query($koneksi, "SELECT * FROM kategori");
                  
                        while($data = mysqli_fetch_array($sql)): ?>
                                        <tr>
                                            <td>
                                                <center><?= $data['id_kategori'] ?></center>
                                            </td>
                                            <td>
                                                <center><?= $data['nama_kategori'] ?></center>
                                            </td>
                                            <td>
                                                <center><?= $data['harga_jasa'] ?></center>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>

                                </table>
</body>
</html>