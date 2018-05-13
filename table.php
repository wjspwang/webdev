<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "amadeus";

$conn = new mysqli($servername, $username, $password, $database);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}else
{

echo "Connected successfully " ;
//CREATE TABLE
	
    $sql = "CREATE TABLE myusers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    mobile_number int(11),
    email VARCHAR(255) NOT NULL,
    username VARCHAR(50),
	password VARCHAR(50),
	gender VARCHAR(6),
	user_type int(11),
	credits int(11)
    ); ";


    $sql .= "CREATE TABLE products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Photo VARCHAR(100) NOT NULL,
    title VARCHAR(100),
	author VARCHAR(100),
	cost VARCHAR(100),
    pub_date DATETIME
    ); ";

    if ($conn->multi_query($sql) === TRUE) {
        echo "Tables created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

}

$conn->close();
?>