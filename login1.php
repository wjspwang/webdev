<html>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$user = $pass = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$user = valid_input($_POST["user"]);
	$pass = valid_input($_POST["pass"]);
}

function valid_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
$sql = "SELECT id, firstname,lastname,email,gender from myusers WHERE username = '".$user."' AND password = '".$pass."';";
$result = $conn->query($sql);

if($result->num_rows > 0 ){
	echo "Welcome! ".$user."!<br><br>";
	while($row = $result->fetch_assoc()){
		echo "ID: " . $row["id"]. "<br>Name: " .$row["firstname"]. "<br>Last name: " .$row["lastname"].
		"<br>E-mail: " .$row["email"]. "<br>Gender: " .$row["gender"]."<br>";
		$_SESSION["id"] = "$row[id]";
	}
}else{	
	echo "User not Found ! Please try again!<br> ";
	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
}
	
	$conn->close();
	
	
	
?>
</body>
</html>