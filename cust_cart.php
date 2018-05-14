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

if(isset($_POST['add_to_cart']))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'		=> $_GET["id"],
				'item_name'		=> $_POST["hidden_title"],
				'item_price'	=> $_POST["hidden_cost"],
				'item_quantity' => $_POST["quantitiy"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
			echo '<script>window.location="shopping_cart.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'item_id'		=> $_GET["id"],
		'item_name'		=> $_POST["hidden_title"],
		'item_price'	=> $_POST["hidden_cost"],
		'item_quantity' => $_POST["quantitiy"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
	
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shopping_cart.php"</script>';
			}
		}
	}
}
	

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<style>
input[type=text]{
	text-align:center;
}
</style>
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
<ul>
  <li><a class="active" href="cust_homepage.php">Home</a></li>
  <!--<li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>-->
  <li><a href="cust_cart.php">Shopping cart</a></li>
</ul>
</div>
<div class="container" style="width:7000px;">
	<h3 align="center">Shopping Cart</h3><br>
	<div class="row">
	<?php
	$query = "SELECT * FROM products ORDER BY prod_id ASC";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
	?>
	<div class="col-md-4">
		<form method="post" action="shopping_cart.php?add&id=<?php echo $row["prod_id"]; ?>">
			<div style="border: 1px solid #333; background-color:#f1f1f1; border-radius:25px">
			<img style="margin-top:10px" height="350px" width="250px" src="<?php echo $row['Photo'];?>"/>	
			<h4 class="text-info"><?php echo $row["title"]; ?></h4>
			<h4 class="text-danger">Php <?php echo $row["cost"]; ?></h4>
			<input type="text" name="quantitiy" class="form-control" value="1" width="48"/>
			<input type="hidden" name="hidden_title" value="<?php echo $row["title"];?>"/>
			<input type="hidden" name="hidden_cost" value="<?php echo $row["cost"];?>"/>
			<input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
			</div>
		</form>
	</div>
	<?php 
		}
	}
	?>
	</div>
	<div style="clear:both"></div>
	<br>
	<h3>Order Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					$total = 0;
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
				    ?>
					<tr>
						<td><?php echo $values["item_name"] ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?></td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"],2); ?></td>
						<td><a href="shopping_cart.php?action=delete&id=<?php echo $values["item_id"]?>"><span class="text-danger">Remove</span></a></td>
					</tr>
				<?php
						$total =  $total + ($values["item_quantity"] * $values["item_price"]);
					}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Php<?php echo number_format($total, 2)  ?></td>
						<td></td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
</div>
</body>
</html>