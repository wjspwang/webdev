<html>
<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$user = $pass = "";
$user_type = "";
$user_id = "";

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
	
$sql = "SELECT user_id, firstname,lastname,email,gender,user_type from myusers WHERE username = '".$user."' AND password = '".$pass."';";
$result = $conn->query($sql);

if($result->num_rows > 0 ){
	$sql = "SELECT user_id,user_type FROM myusers WHERE username = '".$user."' AND password = '".$pass."';" ;
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$_SESSION["user_id"] = $row["user_id"];
			$_SESSION["user_type"] = $row["user_type"];
		}
	echo "<p align='center'>Welcome! ".$user."! <br> redirecting in 3 seconds...</p>";
	$_SESSION["username"] = $user;
		if($_SESSION["user_type"] == 1)
		{
		?>
		<head><meta http-equiv="refresh" content="3;url=admin_homepage.php" /></head>
		<?php
		}else if($_SESSION["user_type"] == 2)
		{
		?>
		<head><meta http-equiv="refresh" content="3;url=cust_homepage.php" /></head>
		<?php
		}

	}
		
	
}else{	
	echo "User not Found ! Please try again!<br> ";
	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
}
	
	$conn->close();
	
	
	
?>
<?php include 'css.php';?>
<body>
</body>
</html>