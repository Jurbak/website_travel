<?php

    $host = 'localhost';

    $dbname = 'travel';

    $username = 'root';

    $password = '';



    $conn = new mysqli($host, $username, $password, $dbname);



    if ($conn->connect_error) {

    die("Koneksi database gagal: " . $mysqli->connect_error);

    }



?>