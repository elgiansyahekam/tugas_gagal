<?php
$plat_nomor = $_POST['plat_nomor'];
$merek = $_POST['merek'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$tahun = $_POST['tahun'];
$no_parkir = $_POST['no_parkir'];

include "../../config/koneksi.php";

$query = mysqli_query($conn,"INSERT INTO kendaraan VALUES (
    '$plat_nomor',
    '$merek',
    '$jenis_kendaraan',
    '$tahun',
    '$no_parkir')");

// Javascript untuk notifikasi
if ($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data tidak berhasil disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>