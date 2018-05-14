<html>
<?php include 'css.php';?>
<head><meta http-equiv="refresh" content="3;url=login.php" /></head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}


	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$user_id = $_SESSION["username"];
	$prod_id = $_POST["hidden_id"];
}

$sql = "INSERT INTO shopping_cart(user_id, prod_id) VALUES('".$_SESSION["user_id"]."','".$_SESSION["prod_id"]."');";
	  
	  
	  if($conn->query($sql) === TRUE ){
		echo "Added to Shop cart Success <br>";
		}else {
		echo "Error " .$sql."<br>". $conn->error;
		}



$conn->close();
*/
?>
</html>