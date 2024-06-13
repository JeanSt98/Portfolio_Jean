<?php
include ("connection.php");
$con=connect();
$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$message=$_POST["message"];

$sql = "INSERT INTO contact (name, number, email, message) VALUES ('$name', '$number','$email','$message')";
$query = mysqli_query($con,$sql);
if($query){
    header("location: ../message.html");
}
?>