<?php

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="gudnite";
    
//Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO contact (`message_id`, `name`, `mobile`, `email`, `message`) VALUES (NULL, '$name', '$mobile', '$email', '$message')";

if($conn->query($sql)===TRUE){
    echo "New record created successfully";
    header('location:index.php');
}else{
    echo "Error: " .$sql. "<br>" .$conn->error;
}
$conn->close();
