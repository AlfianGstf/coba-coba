<?php
include '../dbConnection.php';

// Dapatkan value dari tambahMhsForm.php
$nim = $_POST["nim_mhs"];
$nama = $_POST["nama_mhs"];
$jurusan = $_POST["jurusan_mhs"];
$angkatan= $_POST["angkatan_mhs"];

$queryCheck = "SELECT * FROM " .DB_TABLE_DATA. "WHERE id_mhs=$nim";
$resultCheck = mysqli_query($con, $queryCheck);

$queryInsert = "INSERT INTO " .DB_TABLE_DATA. " (nim_mhs, nama_mhs, jurusan_mhs, angkatan_mhs) VALUES ('$nim', '$nama', '$jurusan', '$angkatan')";

// Check apakah data sudah ada tau belum berdasarkan NIM
// Nilai return echo akan dibaca oleh fungsi tambahMhs() pada js/script.gs
if(mysqli_num_rows($resultCheck) > 0){
    // return 0 jika sudah ada
    echo 0;
} else {
    // Lakukan insert ke database dan return 1
    mysqli_query($con, $queryInsert);
    echo 1;
}

mysqli_close($con);

?>