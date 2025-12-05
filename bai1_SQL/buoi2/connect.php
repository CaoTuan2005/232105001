<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quan_ly_web_phim";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
