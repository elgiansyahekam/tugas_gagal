<?php
$no_parkir = $_POST['no_parkir'];
$lokasi = $_POST['lokasi'];
$tarif_parkir = $_POST['tarif_parkir'];

include "../../config/koneksi.php";

$query = mysqli_query($conn,query:"INSERT INTO parkir VALUES (
    '$no_parkir',
    '$lokasi',
    '$tarif_parkir')");

// Javascript untuk notifikasi
if ($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data tidak berhasil disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>