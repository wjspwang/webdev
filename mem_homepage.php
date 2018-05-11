<html>
<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:homepage.php");
}
?>
<?php include 'css.php' ?>

<body>
<div id="title" class="head" align = "left">
Amadeus: Online Comic and Manga Shop <img height="50px" width="50px" src="coffee.png">
</div>
<div id="login" class="head" align="right">
Welcome! <?php echo $_SESSION["username"]; ?>
<form action = "homepage.php">
<button class="button">Log Out</button>
</form>
</div>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<hr>-</hr>

<body>
</html>