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

// get the post records
$txtSEmail = $_POST['txtSEmail'];

// SQL query to select data from database
$sql = "INSERT INTO `subscribe` (`Email`) VALUES ('$txtSEmail')";

// insert in database 
$rs = mysqli_query($mysqli, $sql);

if($rs)
{
	echo '<script language="javascript">alert("Subscrito");</script>';
    echo '<p><a href="javascript:history.go(-1)" title="Volver a página anterior">« Regresar</a></p>';
}

$mysqli->close();
?>