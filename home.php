<html>
<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:homepage.php");
}
?>
<?php include 'css.php';?>
<body>
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
<table id="welcome">
<tr>
<td><p id="welcome_text" align="left">Welcome! <?php echo $_SESSION["username"]; ?></p></td>
<td align="right"><a href='logout.php'><button class="button">Log Out</button></a></td>
</tr>
</table>
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
  <li><a class="active" href="mem_homepage.php">Home</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="shopping_cart.php">Shopping cart</a></li>
</ul>
</div>

<body>
</html>