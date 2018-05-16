<html>
<?php include 'css.php';?>
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



	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uploaddir = '/webdev-master/';

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
?>
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
					$count = 0;
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
						$count = $count + $values["item_quantity"];
					}
					?>
					<tr>
						<td colspan="3" align="right">Quantity</td>
						<td align="right"><?php echo $count  ?> Items</td>
						<td></td>
						<td colspan="3" align="right">Total</td>
						<td align="right">Php<?php echo number_format($total, 2)  ?></td>
						<td></td>
						</form>
					</tr>
					<?php
					
				}
				
				?>
			</table>

<?php

					$sql = "INSERT INTO order_tbl(user_id, quantity, total)
					VALUES('".$_SESSION["user_id"]."','".$count."','".number_format($total, 2)."');";

						  
						  
						  if($conn->query($sql) === TRUE ){
							echo "Purchase Success <br>";
							}else {
							echo "Error " .$sql."<br>". $conn->error;
							}

$conn->close();
?>			
			<form action="admin_homepage.php">
			<input type="submit" value="Back to homepage") /> 
			</form>
			</div>
			


</html>