<?php
    $hostName   = "localhost"; 
    $userName   = "root"; 
    $password   = ""; 
    $dbName     = "penjualan"; 
    $conn        = new mysqli($hostName,$userName,$password,$dbName);

    /*if ($conn) {
        echo "connected";
    } else {
        echo "not connected";
    }*/
    
    /*$data_pelanggan = mysqli_query($conn,"SELECT * FROM pelanggan");

    while ($pelanggan = mysqli_fetch_array($data_pelanggan)) {
        echo $pelanggan["nama"] . " " . $pelanggan["jenis_kelamin"] . " " . $pelanggan["telp"] . " " . $pelanggan["alamat"] . "<br>";
    }    */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>connected</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="2"  style="text-align: center;">
            <tr>
                <td width="50px">ID</td>
                <td width="200px">Nama</td>
                <td width="200px">Jelis_Kelamin</td>
                <td width="200px">Telp</td>
                <td width="200px">Alamat</td>
            </tr>
            <?php 
            while ($pelanggan = mysqli_fetch_array($data_pelanggan)) {    
                echo $pelanggan["nama"] . " " . $pelanggan["jenis_kelamin"] . " " . $pelanggan["telp"] . " " . $pelanggan["alamat"] . "<br>";
            ?>
            <tr>
                <td ><?php echo $pelanggan['id']?></td>
                <td ><?php echo $pelanggan['nama']?></td>
                <td ><?php echo $pelanggan['jenis_kelamin']?></td>
                <td ><?php echo $pelanggan['telp']?></td>
                <td ><?php echo $pelanggan['alamat']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>