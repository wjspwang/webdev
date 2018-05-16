<html>
<?php include 'css.php';?>
<head><meta http-equiv="refresh" content="100;url=addProduct.php" /></head>
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
		$uploaddir = '/webdev-master/';;
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
	  


$sql = "DELETE FROM products WHERE prod_id = ".$selected_id.";";
	  
	  
	  if($conn->query($sql) === TRUE ){
		echo "Product Successfuly Removed <br>";
		}else {
		echo "Error " .$sql."<br>". $conn->error;
		}



$conn->close();
?>
</html>