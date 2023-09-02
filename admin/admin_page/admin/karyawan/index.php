<?php
session_start();

// Periksa apakah kunci 'level' ada dalam $_SESSION
if (isset($_SESSION['level'])) {
    echo $userLevel = $_SESSION['level'];

    // Selanjutnya, Anda dapat menggunakan $userLevel dengan aman
} else {
    // Kunci 'level' tidak ada dalam $_SESSION, berikan respons atau tindakan yang sesuai
    echo "Kunci 'level' tidak ditemukan dalam sesi.";
}
?>
