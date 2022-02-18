<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
        while($row = mysqli_fetch_array($result)):?>
        {
            <td>
                <?= $row['row1']; ?>
            </td>
            // echo $row['dzikri'].$row['dzikri'];
        }
        <?php endwhile; ?>
</body>
</html>
<?php
    $koneksi = mysqli_connect("localhost", "root", "", "admin");

    $query = "SELECT * FROM barang";
    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);
    
    // if($cek > 0)
    // {
        
    // <!-- } -->

    $FORM1 = $_POST['data1'];

    $tambah = "INSERT INTO tb_barang VALUES ('".$FORM1."','".$FORM2."','".$FORM3."')";
    $result = mysqli_query($koneksi, $tambah);
    if($result)
    {
        echo "Success";
    }
    else
    {
        echo "Error";
    }
?>