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
?>
<head>
<?php include 'css.php';?>
</head>
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['user_type']) ){
   header("Location:homepage.php");
}

?>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<body >
<table id="welcome">
<tr>
<td><p id="welcome_text" align="left">Welcome! <?php echo $_SESSION["username"]; ?></p></td>
<td align="right"><a href='logout.php'><button class="button">Log Out</button></a></td>
</tr>
</table>
<div class="header">
<div id="title" class="head">
Amadeus: Online Comic and Manga Shop <img height="100px" width="100x" src="coffee.png">
</div>
<div id="login" class="head" align="left">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<!--<form action = "login1.php" method = "post">

--Login to Purchase!-<br> 
Username:<input type = "text" name = "user" required>
Password: <input type = "password" name = "pass" required>
<button class="button">Login</form></button>
Don't have an account yet ?
<form action = "register.php">
<button class="button"> Sign up</button>
</form>-->
</div>
<ul>
  <li><a class="active" href="admin_homepage.php">Home</a></li>
  <!--<li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>-->
  <li><a href="addProduct.php">Add Product</a></li>
    <li><a href="editProduct.php">Edit Product</a></li>
  <li><a href="removeProduct.php">Remove Product</a></li>
  <li><a href="shopping_cart.php">Shopping cart</a></li>
</ul>
</div>
<div class="content">
	<table>
		<form enctype="multipart/form-data" action="removeProduct1.php" method="POST">
			<tr>
				<td>Products</td>
				<td>
					<?php
						$sql = "SELECT * FROM products";
						if($result = $conn->query($sql)){
							if($result->num_rows > 0){
								echo "<table>";
								echo "<tr>";
								echo "<th>Product ID</th>";
								echo "<th>Photo</th>";
								echo "<th>Title</th>";
								echo "<th>Author</th>";
								echo "<th>Cost</th>";
								//echo "<th>Genre</th>";
								echo "<th>Publish Date</th>";
								echo "</tr>";
								while($row = $result->fetch_array()){
									echo "<tr>";
									echo "<td>" . $row['prod_id'] . "</td>";
									echo "<td><img style= 'margin-top:10px' height='40px' width='30px' src='". $row['Photo'] . "'</td>";
									echo "<td>" . $row['title'] . "</td>";
									echo "<td>" . $row['author'] . "</td>";
									echo "<td>" . $row['cost'] . "</td>";
									echo "<td>" . $row['pub_date'] . "</td>";
									echo "</tr>";
								}
								echo "</table>";
								// Free result set
								$result->free();
							} else{
								echo "No records matching your query were found.";
								}
						} else{
							echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
							}
 
					// Close connection
					$conn->close();
					?>
				</td>
			</tr>
			<tr>
				<td>Product ID: </td>
				<td><input type="text" name="selected_id" ></td>
			<tr>

				<td></td>
				<td><input type="submit" value="Remove" ></td>
			</tr>
		</form>
	</table>
</div>
</body>
</html>