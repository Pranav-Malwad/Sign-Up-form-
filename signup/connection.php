<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo("Connected");
}
else{
    echo("connection failed").mysqli_connect_error();
}
?>