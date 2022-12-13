<?php 

include "config2.php";

  if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO `feedback`(`username`,`email`, `feedback`) VALUES ('$username','$email','$feedback')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn-> error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
  
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Feedback form</title>
 
    <title>The Gujarat Tourism</title>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(Heritage.jpg);
    /* background-color: #3DED97; */
    background-size: cover;
    background-attachment: fixed;
  }
  /* align items center vertically and horizontally  */
  .container{
    display: flex;
    justify-content: center;
    align-items:center !important;
    height: 100vh;
  }
  .form{
    width: 350px;
    height: 450px;
    background-color: white;
    /* box-shadow: 0 5px 30px black; */
  }
  .btn button {
    padding: 3px;
    margin: 30px 0px 40px 30px;
    border-style: none;
    background-color: transparent;
    color: black;
    font-size: 18px;
    font-weight: 550;
  }
  .formGroup{
    display: flex;
    justify-content: center;
  }
  .formGroup input{
    border: none;
    width: 80%;
    border-bottom: 2px solid black;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 14px;
    font-weight: bold;
    background-color:white;
    color: black;
  }
  input:focus {
    outline: none !important;
    border-bottom: 2px solid rgb(91, 243, 131);
    font-size: 17px;
    font-weight: bold;
    color: green;
  }
  ::placeholder {
    color: black;
  }
  .checkBox{
    display: flex;
    justify-content: center;
    margin: 16px!important;
  }
   
  #checkbox{
    margin-right: 10px;
    height: 15px;
    width: 15px;
  }
  .text{
    color: black;
    font-size: 13px;
  }
  .btn2{
    padding: 10px;
    width: 150px;
    border-radius: 20px;
    background-color: rgb(10, 136, 43);
    border-style: none;
    color: white;
    font-weight: 600;
  }
  .btn2:hover{
    background-color: rgba(10, 136, 43, 0.5);
  }
  .btn button:hover{
    border-bottom: 2px solid rgb(91, 243, 131);
  }
   
  /* hide signup form */

    </style>

    

</head>

 
<body>


</nav> 
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn">Feedback</button>
        <!-- <button class="loginBtn">LOG IN</button> -->
      </div>
      <form class="submit" action="http://localhost/pro/feedback.php" method="get">
        <div class="formGroup">
          <input type="text" id="userName" placeholder="User Name" autocomplete="off" name="username">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email ID" name="email" required autocomplete="off" name="email">
        </div>
       
        <div class="formGroup">
        <!-- <label for="subject">Subject</label> -->
    <input type="feedback" name="subject" placeholder="feedback"  required autocomplete="off" name="feedback"></textarea>
            </div>
        </br>
        <div class="formGroup">
        <button type="submit"  class="btn2" name="submit"> Post</button>
        </div>
 </form>
    </div>
</div>


</body>

</html>
