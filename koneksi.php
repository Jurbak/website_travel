<?php
    $host = 'localhost';
    $dbname = 'travel';
    $username = 'root';
    $password = '';

    $mysqli = new mysqli($host, $username, $password, $dbname);

    if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
    }

?>