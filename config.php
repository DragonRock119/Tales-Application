<?php

function conexion(){
$servername = "localhost";
$username = "id17483408_dbjohn";
$password = "bluphu*6?}WW#p@o";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

return $conn;
}


?>