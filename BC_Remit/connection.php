<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbase = "bc_remit";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


?>