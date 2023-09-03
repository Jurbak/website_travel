<?php
include '../../../koneksi.php';
$id_user = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tbl_user WHERE id_user='$id_user' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }