<?php
include("conncrtio.php");
$con= connection();

$id= null;
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql = "INSERT INTO user VALUES ('$id','$name','$lastname','$username','$password','$email')";
$query= mysqli_query($con, $sql);
if($query){
    header("location: cud.php");
};
?>