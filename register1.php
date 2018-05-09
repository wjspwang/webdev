<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$lname = $fname = $email = "";
$user = $pass = $bday = $gender = "";
$month = $day = $year = "";

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname = valid_input($_POST["fname"]);
		$lname = valid_input($_POST["lname"]);
		//$mnum = valid_input($_POST["mnum"]);
		$email = valid_input($_POST["email"]);
		$user = valid_input($_POST["user"]);
		$pass = valid_input($_POST["pass"]);
		//$date = $_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
		$gender = valid_input($_POST["gender"]);
	}
	
	
	function valid_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
	function isNumberKey($evt)
      {
         $charCode = ($evt.which) ? $evt.which : event.keyCode;
         if ($charCode > 31 && ($charCode < 48 || $charCode > 57)){
            return false;
		 }

         return true;
      }
	  


$sql = "INSERT INTO myusers(firstname,
lastname, email, username, password,
 gender) VALUES('".$fname."','".$lname."',
 '".$email."','".$user."','".$pass."','".$gender."');";
	  
	  
	  if($conn->query($sql) === TRUE ){
		echo "Register Success <br>";
		}else {
		echo "Error " .$sql."<br>". $conn->error;
		}



$conn->close();
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "midtermDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$lname = $fname = $email = "";
$bday = $gender = "";
$mnum = 0;
$month = $day = $year = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname = valid_input($_POST["fname"]);
		$lname = valid_input($_POST["lname"]);
		$mnum = valid_input($_POST["mnum"]);
		$email = valid_input($_POST["email"]);
		$date = $_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
	}
	

$sql = "INSERT INTO midtermTBL(firstname,
lastname,mobile_number, email, bday
 ) VALUES('".$fname."','".$lname."','".$mnum."',
 '".$email."','".$date."');";
	  
	  
	  if($conn->query($sql) === TRUE ){
		echo "Register midtermTBL Success";
		}else {
		echo "Error " .$sql."<br>". $conn->error;
		}



$conn->close();
*/
?>
</html>