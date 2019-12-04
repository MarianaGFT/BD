<?php
$Host=$_POST["Host"];
$username =$_POST['Username'];
$password =$_POST["Password"];
// Create connection
$conn = pg_connect($Host, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " .pg_local_error());
}else{
    header('Location: /ProyectoBD/LoginFinal.htm');
}
?>
