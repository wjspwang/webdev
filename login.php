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
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
</div>
<div class="content">
<br>
<div id="login" class="head" ">
<form action = "login1.php" method = "post">

--Login to Purchase!-<br> 
Username:<input type = "text" name = "user" required>
Password: <input type = "password" name = "pass" required>
<button class="button">Login</form></button>
Don't have an account yet ?
<form action = "register.php">
<button class="button"> Sign up</button>
</form>
</div>
</div>

<body>
</html>