<?php
include "connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>GMSA Registration Form</title>
</head>
<body>

    <nav>
        <div class="topnav" id="myTopnav">
            <a href="#home" >Home</a>
            <a href="#news">About</a>
            <a href="#contact">Contact</a>
            <a href="#about" class="active">Become a member</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
        </div>
    </nav>

    <div class="container">
        <h1 class="title">GMSA Registration Form</h1>
        <br>

        <form class="reg--form" method="post">
            <label>Firstname: </label>
            <input type="text" name="fname" placeholder="Enter Firstname" required>
            <br><br>
            <label>Lastname: </label>
            <input type="text" name="lname" placeholder="Enter Lastname" required>
            <br><br>
            <label>Programme: </label>
            <input type="text" name="pname" placeholder="Enter Programme" required>
            <br><br>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Enter Email" required>
            <br><br>
            <label>Gender: </label>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female" required>Female
            <br><br>
            <label>Contact: </label>
            <input type="text" name="contact" placeholder="Enter WhatsApp Contact" required>
            <br><br>
            <label>Reference Name: </label>
            <input type="text" name="number" placeholder="Must be 8 digits" required>
            <br><br>
            <input class="register" type="submit" name="register" value="Register">
        </form>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>
</body>
</html>

