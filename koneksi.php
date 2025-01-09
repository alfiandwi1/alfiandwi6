<?php
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'ukk_kasir_alfian');
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>