<?php

$hostname = "localhost";
$username = "root";
$password = "";  // ← PERBAIKAN: typo di 'password'
$database_name = "jajal";

// Gunakan mysqli
$db = new mysqli($hostname, $username, $password, $database_name);

// Cek koneksi
if ($db->connect_error) {
    die("Koneksi gagal bro: " . $db->connect_error);
}

echo "Koneksi berhasil bro";

?>
