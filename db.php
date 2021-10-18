<?php 
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname ="webtech";
    try {
        $con = mysqli_connect($servername,$username,$password,$dbname);
    } catch (Exception $e) {
        echo "Error connection:".$e."";
    }
?>