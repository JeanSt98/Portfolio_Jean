<?php
function connect(){
    $host = "localhost";
    $database = "web_designer";
    $user = "root";
    $password = "";

    $conn = mysqli_connect($host,$user,$password);
    mysqli_select_db($conn,$database);
    return $conn;
}
?>