<?php
include '../dbConnection.php';


// Dapatkan id dari index.php

$id = $_POST["id_mhs"];


$query = "DELETE FROM " . DB_TABLE_DATA . " WHERE id_mhs=$id";
mysqli_query($con,$query);
mysqli_close($con);
?>