<?php
// Menyambungkan PHP dengan Database MySQL
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db_parkir_elgiansyah';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}
?>