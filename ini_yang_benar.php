<?php
$hostName   = "localhost";
$userName   = "root";
$password   = "";
$dbName     = "penjualan";
$conn       = new mysqli($hostName, $userName, $password, $dbName);

/*if ($conn) {
    echo "connected";
} else {
    echo "not connected";
}*/

$data_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");

?>

<!DOCTYPE html>
<html>
<head>
    <title>connected</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="2" style="text-align: center;">
        <tr>
            <td width="50px">ID</td>
            <td width="200px">Nama</td>
            <td width="200px">Jenis Kelamin</td>
            <td width="200px">Telp</td>
            <td width="200px">Alamat</td>
        </tr>

        <?php
        while ($pelanggan = mysqli_fetch_array($data_pelanggan)) {
            echo "<tr>";
            echo "<td width='50px'>" . $pelanggan['id'] . "</td>";
            echo "<td width='200px'>" . $pelanggan['nama'] . "</td>";
            echo "<td width='200px'>" . $pelanggan['jenis_kelamin'] . "</td>";
            echo "<td width='200px'>" . $pelanggan['telp'] . "</td>";
            echo "<td width='200px'>" . $pelanggan['alamat'] . "</td>";
            echo "<td width='200pd'>" . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
