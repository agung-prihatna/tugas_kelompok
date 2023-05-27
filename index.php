<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" class="table table-stiped">
            <tr>
                <td width="50px" class="text-center">
                    <b>
                        ID
                    </b>
                </td>
                <td width="50px" class="text-center">
                    <b>
                        Nama
                    </b>
                </td>
                <td width="50px" class="text-center">
                    <b>
                        Jenis Kelamin
                    </b>
                </td>
                <td width="50px" class="text-center">
                    <b>
                        Telepon
                    </b>
                </td>
                <td width="50px" class="text-center">
                    <b>
                        Alamat
                    </b>
                </td>
                <td width="50px" class="text-center">
                    <b>
                        Aksi
                    </b>
                </td>
            </tr>
            <?php
                include('connection.php');
                $data_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
                while($pelanggan = mysqli_fetch_array($data_pelanggan)) {
            ?>
            <tr>
                <td class="text-center"> <?php echo $pelanggan['id']?></td>
                <td class="text-center"> <?php echo $pelanggan['nama']?></td>
                <td class="text-center"> <?php echo $pelanggan['jenis_kelamin']?></td>
                <td class="text-center"> <?php echo $pelanggan['telp']?></td>
                <td class="text-center"> <?php echo $pelanggan['alamat']?></td>
                <td class="text-center">
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>