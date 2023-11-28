<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "crud";
// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
    die(mysqli_connect_error());
}

?>