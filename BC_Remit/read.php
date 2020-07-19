<?php
require ("./connection.php");

$queryAccounts  = "SELECT * FROM accounts";
$sqlAccounts = mysqli_query($conn, $queryAccounts);



?>