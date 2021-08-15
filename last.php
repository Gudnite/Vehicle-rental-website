<?php

$name = $_POST['username'];
$pass = $_POST['password'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="gudnite";
    
//Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    
$sql="SELECT user_name FROM registration WHERE user_name='$name'";    
    
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);

if($count==1){
    header("location:indexlogout.php");
}else{
    header("location:incorrect.html");
}
$conn->close();
    ?>
    
    
    