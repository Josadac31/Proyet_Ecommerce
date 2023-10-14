<?php

include("conncrtio.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM user WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: cud.php");
}else{

}