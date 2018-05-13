<html>
<?php include 'css.php';?>
<body>
<?php 
session_start();
if(!isset($_SESSION['username'])){
	?>
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
  <li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
</div>
<div class="content">
<h1>Contact us!</h1>
<h2>E-mail: AmadeusEx@gmail.com</h2>
<h2>Mobile no.: 0912-345-6789</h2>
</div>
<?php
}
?>
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
  <li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
</div>
<div class="content">
<h1>Contact us!</h1>
<h2>E-mail: AmadeusEx@gmail.com</h2>
<h2>Mobile no.: 0912-345-6789</h2>
</div>


</body>
</html>