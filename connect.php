<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieuweb";
try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "<br>";
  echo "Connection failed: " . $e->getMessage();
}

?>