<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


$email = $_POST['email'];
$password = $_POST['password'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginnews";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

$query = "SELECT *FROM loginnews WHERE email='$email' and password='$password'";

$result = $conn->query($query);

if($result->num_rows == 1){

    header("location: utilisateur.html");
    exit();
}
else{
    header("location: login.html");
    exit();
}
$conn->close();
}
?>