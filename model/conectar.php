<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peliculas";

<<<<<<< HEAD
=======

>>>>>>> 9218f8ef6e9c22b179f28d5dc1b0c178a97907e6
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
<<<<<<< HEAD
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
=======
    die("Conexion ha fallado: " . $conn->connect_error);
}
//echo "Connected successfully";
>>>>>>> 9218f8ef6e9c22b179f28d5dc1b0c178a97907e6
?>