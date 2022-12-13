<?php 

include "config.php"; 

if (isset($_GET['cust_id'])) {

    $cust_id = $_GET['cust_id'];

    $sql = "DELETE FROM `signup` WHERE `cust_id`= "+$cust_id;

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
	header("Location: view.php");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>