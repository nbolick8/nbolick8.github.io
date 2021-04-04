<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'psw');
if (!empty)($username)) {
if (!empty($password)) {
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "demo";
}

//Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_errno().')'
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO loginform (username, password)
    values ('$username', '$password')";
    if ($conn->query($sql)){
        echo "New user is inserted successfully";
    }
    else {
        echo "Error: ".$sql."<br>.$conn->error;
    }
    $conn->close();
}

else{
    echo "Please enter your password";
    die();
}
}
else{
    echo "Please enter your Email";
}
?>