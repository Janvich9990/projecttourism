<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `signup`(`cname`,`email`, `paswd`) VALUES ('$name','$email','$password')";
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
   
 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Register form</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(Adalaj.jpeg);
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
    background-color: rgba(41, 39, 39, 0.3);
    box-shadow: 0 5px 30px black;
  }
  .btn button {
    padding: 3px;
    margin: 30px 0px 40px 30px;
    border-style: none;
    background-color: transparent;
    color: beige;
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
    border-bottom: 2px solid white;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 14px;
    font-weight: bold;
    background-color: transparent;
    color: white;
  }
  input:focus {
    outline: none !important;
    border-bottom: 2px solid rgb(91, 243, 131);
    font-size: 17px;
    font-weight: bold;
    color: white;
  }
  ::placeholder {
    color: white;
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
    color: rgb(199, 197, 197);
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
  .login{
    display: none;
  }
   
  /* Login form code */
  .login{
    margin-top: 40px;
  }
  .login .checkBox{
    margin-top: 30px !important;
  }

  .pass{
    text-align: center;
    padding: 10px;
    margin:10px 0;
}

.pass a{
    color:white;
    text-decoration: none;
    font-family: "Poppins",sans-serif;
}
/* Nv bar */
.logo{
    width:20%;
    display:flex;
    justify-content: center;
    align-items: center;
}
.logo img{
    width:70px;
    /* /* border: 1px solid black; */
   
}
.navbar{
    /* display:flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top:0;
    cursor: pointer; */
    background-color: black;
    /* color: blueviolet; */
    margin-bottom: 0;
    /* background-color: rgb(41, 7, 134); */
    z-index: 9999;
    border: 0;
    font-size: 15px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 0px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    margin-left: auto;
    display:flex; 
    align-items: center; 
    justify-content: center; 
    position: sticky; 
    top:0; 
    cursor: pointer; 
    
}
.navlist{
    width: 70%;
    display:flex;
    align-items: center;
    
    
}

.navlist li{
    list-style: none;
    padding: 23px 36px; 
    
}

.navlist li a{
    color: white;
}

/* .navlist li a:hover{
    text-decoration: none;
    /* color: Chartreuse ; */
    /* font-size: 20px; */
    /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
/* }  */

.rightnav
{
    
    text-align: right;
    width:50%;
    padding: 0 23px;
}

#Search{
    padding: 5px;
    font-style: 17px;
    border: 2px;
    border-radius: 9px;
    border: 2px solid black;
}

    </style>

  <script>
    /* Show login form on button click */
 
$('.loginBtn').click(function(){
    $('.login').show();
    $('.signUp').hide();
    /* border bottom on button click */
    $('.loginBtn').css({'border-bottom' : '2px solid #ff4141'});
    /* remove border after click */
    $('.signUpBtn').css({'border-style' : 'none'});
  });
   
   
  /* Show sign Up form on button click */
   
  $('.signUpBtn').click(function(){
    $('.login').hide();
    $('.signUp').show();
    /* border bottom on button click */
    $('.signUpBtn').css({'border-bottom' : '2px solid #ff4141'});
     /* remove border after click */
     $('.loginBtn').css({'border-style' : 'none'});
  });
    </script>
</head>
 
<body>
<!-- Navbar -->
<nav class="navbar background">
    <ul class="navlist">
        <div class="logo"><img src="gujaratexp.png"  alt="logo"></div>
        <li><a href="#home">Home</a></li>
        <li><a href="regformig.html">Login</a></li>
        <li><a href="file:///E:/C_programs/html/project/css/tour.html">Tour-Packages</a></li>
        <li><a href="#HotelBooking">Hotel-Booking</a></li>
        <li><a href="feedback2.html">Feedback</a></li>
        <li><a href="file:///E:/C_programs/html/project/css/about%20us.html">About us</a></li>
    </ul>
    <div class="rightnav">
      
          <input type="text"  Id="Search" name="Search">
          <button class="btn btn-sm">Search</button>
      </div>


</nav> 



  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn">SIGN UP</button>
        
      </div>
      <form class="signUp" action="http://localhost/pro/index.php" method="POST">
        <div class="formGroup">
          <input type="text" id="userName" placeholder="User Name" autocomplete="off" name="name">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email ID"  required autocomplete="off" name="email">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" required autocomplete="off" name="password">
        </div>
        <div class="formGroup">
          <input type="password" id="confirmPassword" placeholder="Confirm Password" required autocomplete="off">
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">I agree with term & conditions</span>
        </div>
        <div class="formGroup">
          <button type="submit"  class="btn2" name="submit">REGISTER</button>
          <a href="http://localhost/pro/view.php">VIEW</a>
        </div>
 
      </form>
        
      
      </form>
 
    </div>
  </div>
 
</body>
 
</html>
