<html>
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
NEWS FLASH
</div>
</body>
</html>