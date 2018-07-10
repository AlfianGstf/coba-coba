<?php
include '../dbConnection.php';

$id_mhs= $_POST["id_mhs"];
$query = "SELECT * FROM ".DB_TABLE_DATA. " WHERE id_mhs=$id_mhs";
$result = mysqli_query($con,$query);

// Check apakah data mahasiswa ada atau tidak
// Kembalikan data dalam format json jika ada
// Jika tidak kembalikan nilai 1
if(mysqli_num_rows($result) > 0){
    $response = mysqli_fetch_assoc($result);
    // kembalikan data dalam bentuk json
    echo json_encode($response);
} else {
    echo 1;
}

mysqli_close($con);
?>