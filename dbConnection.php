<?php
include 'Constant.php';

$con = mysqli_connect(DB_URL, DB_UNAME, DB_PASS, DB_NAME);
if(!$con) {
    die("Connection failed : " .mysqli_connect_error());
}
?>