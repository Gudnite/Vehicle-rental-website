<?php
$first =$_POST['first'];
$last =$_POST['last'];   
$email =$_POST['email'];
$user =$_POST['user'];
$password =$_POST['password'];
$telephone =$_POST['telephone'];
  
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="gudnite";


$conn = new mysqli($servername,$username,$password,$dbname);


if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO registration (`user_id`, `first_name`, `last_name`, `email`, `user_name`, `password`, `telephone`) VALUES (NULL, '$first', '$last', '$email', '$user', '$password', '$telephone')";

if($conn->query($sql)===TRUE){
    echo "New record created successfully";
    header('location:login.php');
}else{
    echo "Error: " .$sql. "<br>" .$conn->error;
}
$conn->close();



?>