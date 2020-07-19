<?php
require ("./connection.php");

if(isset($_POST['create'])) {
    $username = $_POST['username'];
    
    $password = md5($_POST['password']);
    

    $queryCreate = "INSERT INTO accounts VALUES (null,'$username','$password')";
    $sqlCreate = mysqli_query($conn, $queryCreate);

    echo '<script> alert("Successfully Created")</script>';
    echo '<script>window.location.href = "/BC_Remit/index.php"</script>';
}

else {
    echo '<script>window.location.href = "/BC_Remit/index.php"</script>';
}


?>