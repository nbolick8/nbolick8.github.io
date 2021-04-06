<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'password2');
if (!empty($firstname)) {
if (!empty($lastname)) {
if (!empty($email)) {
if (!empty($password)) {
if (!empty($password2)) {
$host = "localhost:85";
$dbusername = "root";
$dbpassword = "";
$dbname = "registration"

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

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
}
?>