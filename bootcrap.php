<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>Hello World!</h1>
  <p>Three equal width columns! Try to add a new div with class="col" inside the row class - this will create four equal-width columns.</p>
  <div class="row">
    <div class="col-md-4" style="background-color:lavender;">
	<form method="post" action="homepage.php?action=add&id=<?php echo $row["id"] ?>">
			<div style="border: 1px solid #333; background-color:#f1f1f1; border-radius:25px">
			<img height="500px" width="400px" src="<?php echo $row['Photo'];?>"/>	
			<h4 class="text-info"><?php echo $row["title"]; ?></h4>
			<h4 class="text-danger">Php <?php echo $row["cost"]; ?></h4>
			<input width="50%" type="text" name="quantitiy" class="form-control" value="1"/>
			<input type="hidden" name="hidden_title" value="<?php echo $row["name"];?>"/>
			<input type="hidden" name="hidden_cost" value="<?php echo $row["cost"];?>"/>
			<input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart"/>
			</div>
		</form>
	</div>
    <div class="col-md-4">
	<form method="post" action="homepage.php?action=add&id=<?php echo $row["id"] ?>">
			<div style="border: 1px solid #333; background-color:#f1f1f1; border-radius:25px">
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
    <div class="col-md-4" style="background-color:lavender;">
	<form method="post" action="homepage.php?action=add&id=<?php echo $row["id"] ?>">
			<div style="border: 1px solid #333; background-color:#f1f1f1; border-radius:25px">
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
  </div>
</div>

</body>
</html>