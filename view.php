<?php 

include "config.php";

$sql = "SELECT * FROM signup";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>
<a class="btn btn-info" href="index.php">Insert</a>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th> Name</th>

        <th>Email</th>
        <th>Password</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['cust_id']; ?></td>

                    <td><?php echo $row['cname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['paswd']; ?></td>

                    <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['signup'];?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?name=<?php echo $row['signup']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>