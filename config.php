<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "vroom";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn)
    die("<script>alert('Connection Failed. Please Try Again!')</script>");

?>