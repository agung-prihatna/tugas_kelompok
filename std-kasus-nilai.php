<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
        <nav class="navbar bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Data Nilai</a>
            </div>
        </nav>
</head>
<body>
</br></br></br>
<?php
    $json_string = file_get_contents('data.json');
    $json = json_decode($json_string, true); 
?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <table class="table table-bg-info table-striped"  >
                    <tr >
                        <td style="width: auto;"width= >No</td>
                        <td>Nama</td>
                        <td>Tanggal Lahir</td>
                        <td>Umur</td>
                        <td>Alamat</td>
                        <td>Kelas</td>
                        <td>Nilai</td>
                        <td>Hasil</td>
                    </tr>
                    <?php
                    $no =1;
                        foreach ($json as $data_array_json) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data_array_json["nama"]; ?></td>
                        <td><?php echo $data_array_json["tanggal_lahir"]; ?></td>
                        <td><?php 
                            $lahir =new DateTime($data_array_json["tanggal_lahir"]);
                            $today = new DateTime();
                            $umur = $today->diff($lahir);
                            echo $umur->y;echo " Tahun";
                            ?>
                        </td>
                        <td><?php echo $data_array_json["alamat"]; ?></td>
                        <td><?php echo $data_array_json["kelas"]; ?></td>
                        <td><?php echo $data_array_json["nilai"]; ?></td>
                        <td>
                            <?php
                                switch ($data_array_json["nilai"]) {
                                    case $data_array_json["nilai"] >= 90 && $data_array_json["nilai"] <= 100:
                                        echo "A";
                                        break;
                                    case $data_array_json["nilai"] >= 80 && $data_array_json["nilai"] < 90:
                                        echo "B";                                
                                        break;
                                    case $data_array_json["nilai"] >= 70 && $data_array_json["nilai"] < 80:
                                        echo "C";                                
                                        break;
                                    case $data_array_json["nilai"] >= 0 && $data_array_json["nilai"] < 70:
                                        echo "D";                                
                                        break;
                                    }           
                            ?>
                        </td>
                    </tr>
                <?php
                $no++;
                    }
                ?>
                </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
	<div class="row">
</body>
</html>