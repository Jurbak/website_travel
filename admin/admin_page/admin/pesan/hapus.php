<?php
include '../../../koneksi.php';
$id_pesan = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tbl_pesan WHERE id_pesan='$id_pesan' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }