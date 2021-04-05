<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  <link href="about.css" rel="stylesheet">

</head>

<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  
  /* Add a background color when the inputs get focus */
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Set a style for all buttons */
  button {
    background-color: #1bb1cc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  button:hover {
    opacity:1;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #312d2d;
  }
  
  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }
  
  /* Add padding to container elements */
  .container {
    justify-content: center;
    padding: 16px;
  }
  
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }
  
  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
   
  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }
  
  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }
  
  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
  
  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
  }
  </style>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="header" onclick="window.location.href='index.html'"><img src="images/PetCareLogo1.png" height="45" width="150"  alt=""></div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html">About
                <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mypets.html">My Pets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calendar.html">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="map.html">Map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="store.html">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forum.html">Forum</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <form action="/register.php" method="POST">   
      <div class="imgcontainer">
        <img src="images/pets.jpg" alt="" class="avatar">
      </div> 
      <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email Adress" name="email" required>
    
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
    
        <button type="submit">Login</button>
        <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    
      <div class="container" style="background-color:#f1f1f1">
      </div>
    </form>

    <!-- The Modal (contains the Sign Up form) -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" method="POST" action="/register.php">
        <div class="container">
          <h1>Register Today!</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>

          <label><b>First Name</b></label>
          <input type="text" placeholder="Enter First Name" name="firstname" required>

          <label><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="lastname" required>

          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
    
          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
    
          <label><b>Confirm Password</b></label>
          <input type="password" placeholder="Repeat Password" name="password2" required>
          
          <label>
            <p> Already have an account? <a href="about.html">Login here.</a></p>
          </label>
    
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="register">Register</button>
          </div>
        </div>
      </form>
    </div>
    
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; UNCC 2021, Cameron Bhatnagar, Noah Bolick, Justin Ganey, Jeriko Geneta</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>