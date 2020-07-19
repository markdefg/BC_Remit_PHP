<?php
require ("./connection.php");

if(isset($_POST['delete'])) {
    $deleteId = $_POST['deleteId'];


    $queryDelete = "DELETE FROM accounts WHERE id = $deleteId";
    $sqlDelete = mysqli_query($conn, $queryDelete);

    echo '<script> alert("Successfully Deleted")</script>';
    echo '<script>window.location.href = "/BC_Remit/index.php"</script>';
}

else {
    echo '<script>window.location.href = "/BC_Remit/index.php"</script>';
}


?>