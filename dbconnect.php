<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'sinhviendb';

    $conn = new mysqli($host,$username,$password,$dbname);

    if($conn -> connect_error){
        die("Failed Connect: ".$conn->connect_error);
    }
?>