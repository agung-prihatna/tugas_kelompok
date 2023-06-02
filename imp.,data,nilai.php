<?php

    $json_string = file_get_contents('data.json'); /*memanggil file atau data jjson*/
    $json = json_decode($json_string, true); /*merubah data json menjadi array yang akan di looping*/

    /*foreach($json as $elem) {
        echo ($elem['nama'].",".$elem['kelas'] );
        echo ("</br>");
    } 
    cara manggilnya bisa kaya di atas dan di bawah*/

    /*foreach($json as $data_array_json) { *//* variable ($data) ini akan di pakai di echo bawah ini */
        /*echo $data_array_json ["nama"] . "kelas : " . $data_array_json["kelas"];
        echo "</br>";
    }*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>FANGSION JSON</title>
    </head>
    <body> 
        <table style="text-align: center;" border="1" width="800px" >
            <tr >
                <td >No</td>
                <td >Nama</td>
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

    </body>
</html>