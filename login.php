<html>
<?php include 'session.php'?>
<?php include 'css.php';?>

<body>
<div class="header">
<div id="title" class="head">
Amadeus: Online Comic and Manga Shop <img height="100px" width="100x" src="coffee.png">
</div>
<div id="login" class="head">
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
  <li><a class="active" href="homepage.php">Home</a></li>
  <!--<li><a href="news.php">News</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="login.php">Login</a></li>-->
</ul>
</div>
<div class="content">
<br>
<div id="login" class="head" ">
<form action = "login1.php" method = "post">
<table align = "center">
<th align="center">--Login to Purchase!--</th><br> 
<tr>
<td>Username:</td><td><input type = "text" name = "user" required></td>
</tr>
<tr>
<td>Password:</td><td><input type = "password" name = "pass" required></td>
</tr>
<tr>
<td><button class="button">Login</form></button></td>
<td></td>
</tr>
<tr>
<td>New to Amadeus?</td>
<td><a href="register.php">Sign up here</a></td>
</tr>
</table>

</div>
</div>

<body>
</html>