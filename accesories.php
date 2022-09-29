<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'productos';

// Server is localhost with
// port number 3306
$servername = 'localhost:3306';
$mysqli = new mysqli(
  $servername,
  $user,
  $password,
  $database
);

// Checking for connections
if ($mysqli->connect_error) {
  die('Connect Error (' .
    $mysqli->connect_errno . ') ' .
    $mysqli->connect_error);
}

$sql2 = " SELECT b.nombre as featured, a.nombre, a.precio, a.foto FROM productos.productos a inner join productos.tipoproductos b on a.IdTipoProducto = b.IdTipoProducto order by a.FechaCreacion asc; ";
$resultProducts = $mysqli->query($sql2);
$mysqli->close();
?>