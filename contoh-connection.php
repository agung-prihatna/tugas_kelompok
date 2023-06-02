<?php
    $hostName   = "localhost"; /*hostname xampp atau local host*/
    $userName   = "root"; /*username xampp atau local host*/
    $password   = ""; /*pw xampp atau local host*/
    $dbName     = "uber-materi"; /*nama data base / tablenya bukan nama olomnya */
    $con        = new mysqli($hostName,$userName,$password,$dbName);

    if ($con) {
        echo "connected";
    } else {
        echo "not connected";
    }
    /*yang di atas if else ini menunjukan klo data sudah tersambung maka muncul
    tulisan connected klo ga not connected*/
?>