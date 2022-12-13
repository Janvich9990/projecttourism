<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $cust_id= $_POST['cust_id'];
        $cname = $_POST['name'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        

        $sql = "UPDATE `signup` SET `name`='$cname',`email`='$email',`password`='$password' WHERE `cust_id`='$cust_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
		header("Location: view.php");

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['cust_id'])) {

    $user_id = $_GET['cust_id']; 

    $sql = "SELECT * FROM `signup` WHERE `cust_id`='cust_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $email = $row['email'];

            $password  = $row['password'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

             name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">


            <br>

           
            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

           

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 