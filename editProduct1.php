<html>
<?php include 'css.php';?>
<head><meta http-equiv="refresh" content="3;url=addProduct.php" /></head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$photo = "";
 $title = $author = $cost = $pub_date = "";
 $selected_id = "";

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uploaddir = '/webdev-master/';
		$uploadfile = $uploaddir. basename($_FILES['photo']['name']);
		$title = valid_input($_POST["title"]);
		$author = valid_input($_POST["author"]);
		$cost = valid_input($_POST["cost"]);
		$pub_date = valid_input($_POST["pub_date"]);
		$selected_id = valid_input($_POST["selected_id"]);
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
	  


$sql = "Update products SET Photo = '".$uploadfile."',
title = '".$title."', author = '".$author."' , cost = '".$cost."' , pub_date = '".$pub_date."' WHERE prod_id = ".$selected_id.";";
	  
	  
	  if($conn->query($sql) === TRUE ){
		echo "Edit Product Success <br>";
		}else {
		echo "Error " .$sql."<br>". $conn->error;
		}



$conn->close();
?>
</html>