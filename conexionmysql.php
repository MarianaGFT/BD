<?php
if (mysqli_connect ("localhost", "root", "")){
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
}else{
echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
}
?>
