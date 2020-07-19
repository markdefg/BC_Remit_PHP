<?php
require("./read.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BC Remit CRUD APP</title>
    <style>
  html, body {
    margin: 0;
    padding: 0;
  }
  .main {
    height: 100vh;

    /* Grid */
    display: grid;
    grid-template-rows: auto auto 1fr;
    justify-items: center;
    row-gap: 20px;
    
  }
  .main .create-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
  }
  .main .create-main h3 {
    text-align: center;
  }
  .main .export-main {
    grid-row: 2/3;
  }
  .main .read-main {
    grid-row: 3/4;
  }
  .main .read-main tr th {
    width: 200px;
  }
  .main .read-main tr td {
    text-align: center;
  }
  .main .read-main tr td:nth-child(4) {
    display: grid;
    grid-auto-flow: column;
  }
</style>
</head>

<body>

    <div class = "main">
        <form class = "create-main" action = "/BC_Remit/create.php" method = "POST">
            <h2> Create Account </h2>
            <input type = "text" name = "username" placeholder = "Enter your Username" required />
            <input type = "password" name = "password" placeholder = "Enter your Password" required />
            <input type = "submit" name = "create" value = "Create" />
        </form>


        <table class = "read-main">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTION</th>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
        <tr>
          <td><?php echo $results['id']; ?></td>
          <td><?php echo $results['username']; ?></td>
          <td><?php echo $results['password']; ?></td>
          
                    <td> 
                        <form action = "/BC_Remit/update.php" method = "POST">
                            <input type = "submit" name = "edit" value = "EDIT">
                            <input type = "hidden" name = "editId" value = "<?php echo $results['id'] ?>">
                            <input type = "hidden" name = "editUsername" value = "<?php echo $results['username'] ?>">
                            <input type = "hidden" name = "editPassword" value = "<?php echo $results['password'] ?>">

                        </form>

                        <form action = "/BC_Remit/delete.php" method = "POST">
                            <input type = "submit" name = "delete" value = "DELETE">
                            <input type = "hidden" name = "deleteId" value = "<?php echo $results['id'] ?>">
                        </form>                    
                    </td>
            </tr>
            <?php } ?>

        </table>


    </div>
    
</body>
</html>