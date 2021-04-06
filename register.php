<?php

$firstname = filter_input(INPUT_POST, 'firstname');
echo $firstname;
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'password2');
if (!empty($firstname)) {
if (!empty($lastname)) {
if (!empty($email)) {
if (!empty($password)) {
if (!empty($password2)) {
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Create database
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
    } else {
      echo "Error creating database: " . $conn->error;
    }
    
    $conn->close();
    

//$host = "localhost:85";
//$dbusername = "root";
//$dbpassword = "";
//$dbname = "registration";
/*
$user = 'root';
$pass = '';
$db = 'registration';

// Create connection
//$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$db = new mysqli('localhost:85', $user, $pass, $db) or die("Unable to connect");

echo "Great work!!";

if (mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_errno().')'
     . mysqli_connect_error());
}
else {
    $sql = "INSERT INTO users (firstname, lastname, email, password, password2)
    values ('$firstname', '$lastname', '$email', '$password', '$password2')";
    if ($conn->query($sql)) {
        echo "New user is successfuly registered.";
    }
    else {
       echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
else {
    echo "Please enter a password that matches the first one.";
    die();
}
}
else {
    echo "Please enter a password.";
    die();
}
}
else {
    echo "Please enter your email.";
    die();
}
}
else {
    echo "Please enter your last name.";
    die();
}
}
else {
    echo "Please enter your first name.";
die();
}*/
?>