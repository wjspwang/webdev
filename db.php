<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}else
{

echo "Connected successfully " ;
// Create database

	$sql = "CREATE DATABASE amadeus; ";
	
	
	
    if ($conn->query($sql) === TRUE) {
        echo "DATABASE created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }


}
$conn->close();	
include 'fake_table.php';
?>