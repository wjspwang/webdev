<html>
<?php 
session_start();

if(!isset($_SESSION['username'])){
   header("Location:homepage.php");
}
?>
<?php include 'css.php';?>
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
<body>
<div class="header">
<div id="title" class="head">
Amadeus: Online Comic and Manga Shop <img height="100px" width="100x" src="coffee.png">
</div>
<div id="login" class="head" align="right">
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
<ul name='filename'>
  <li><a class="active" href="mem_homepage.php">Home</a></li>
  <!--<li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>-->
  <li><a href="login.php">Login</a></li>
</ul>
</div>
<div class="content">
	<h3 align="center">Shopping Cart</h3><br>
	<?php
	$query = "SELECT * FROM products ORDER BY id ASC";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
	?>
	<div class="column">
		<form method="post" action="homepage.php?action=add&id=<?php echo $row["id"] ?>">
			<div style="border: 1px solid #333; background-color:#f1f1f1;">
			<img height="500px" width="400px" src="<?php echo $row['Photo'];?>"/>	
			<h4 class="text-info"><?php echo $row["title"]; ?></h4>
			<h4 class="text-danger">Php <?php echo $row["cost"]; ?></h4>
			<input type="text" name="quantitiy" class="form-control" value="1"/>
			<input type="hidden" name="hidden_title" value="<?php echo $row["name"];?>"/>
			<input type="hidden" name="hidden_cost" value="<?php echo $row["cost"];?>"/>
			<input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart"/>
			</div>
		</form>
	</div>
	<?php 
		}
	}
	?>
</body>
</html>