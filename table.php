<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}

echo "Connected successfully " ;


$sql = "CREATE TABLE myusers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(50),
username VARCHAR(30),
password VARCHAR(30),
gender VARCHAR(6))";

if($conn->query($sql) === TRUE ){
	echo "Table MyUsers created successfuly";
}else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
?>