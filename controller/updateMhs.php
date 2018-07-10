<?php
include '../dbConnection.php';

// Dapatkan value dari updateMhsForm.php
$nim = $_POST["nim_mhs"];
$id = $_POST["id_mhs"];
$nama = $_POST["nama_mhs"];
$jurusan = $_POST["jurusan_mhs"];
$angkatan = $_POST["angkatan_mhs"];

$query = "UPDATE " .DB_TABLE_DATA. " SET nim_mhs='$nim', nama_mhs='$nama', jurusan_mhs='$jurusan', angkatan_mhs='$angkatan' WHERE id_mhs=$id";

if(mysqli_query($con,$query)) {
    header("location: ../index.php");
} else {
    echo "Gagal";
}

mysqli_close($con);
?>