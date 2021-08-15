<?php

$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$date=$_POST['date'];
$time=$_POST['time'];
$pickup=$_POST['pickup'];
$dropat=$_POST['dropat'];
$description=$_POST['description'];


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="gudnite";


$conn = new mysqli($servername,$username,$password,$dbname);


if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO booking (`book_id`, `name`, `email`, `telephone`, `date`, `time`, `pickup`, `dropat`, `description`) VALUES (NULL, '$name', '$email', '$telephone', '$date', '$time', '$pickup', '$dropat', '$description')";


if($conn->query($sql)===TRUE){
    echo "New record created successfully";
    header('location:confirmbook.html');
}else{
    echo "Error: " .$sql. "<br>" .$conn->error;
}
$conn->close();



?>