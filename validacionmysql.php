<?php
$Host=$_POST["Host"];
$username =$_POST['Username'];
$password =$_POST["Password"];
// Create connection
$conn = mysqli_connect($Host, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    header('Location: /ProyectoBD/LoginFinal.htm');
}
?>
