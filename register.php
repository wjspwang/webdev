<html>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amadeus";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connection failed: ". $conn->connect_error);
}


$lname = $fname = $email = "";
$user = $pass = $bday = $gender = "";

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname = valid_input($_POST["fname"]);
		$lname = valid_input($_POST["lname"]);
		$mnum = valid_input($_POST["mobile_number"]);
		$email = valid_input($_POST["email"]);
		$user = valid_input($_POST["user"]);
		$pass = valid_input($_POST["pass"]);
		$bday = $_POST["date"];
		$gender = valid_input($_POST["gender"]);
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


<body>
<form action ="register1.php"  method = "post">
-Sign up here, Komrade-<br>
-Glory to Arstotzka-<br>
First name: <input type = "text" name = "fname" pattern="[a-zA-Z]*"  Required><br>
Last name: <input type = "text" name = "lname" pattern="[a-zA-Z]*"  Required><br>
Mobile number: <input type = "text" name = "mnum" onkeypress="return isNumberKey(event)" maxlength="11" Required><br>
E-mail: <input type = "text" name = "email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br>
Username:<input type = "text" name = "user" ><br>
Password: <input type = "password" name = "pass" Required><br>
<!--Birthday: <select name ="month"> 
<option name ="month" value="1">1</option>
<option name ="month" value="2">2</option>
<option name ="month" value="3">3</option>
<option name ="month" value="4">4</option>
<option name ="month" value="5">5</option>
<option name ="month" value="6">6</option>
<option name ="month"  value="7">7</option>
<option name ="month"name ="month" value="8">8</option>
<option name ="month" value="9">9</option>
<option name ="month" value="10">10</option>
<option name ="month" value="11">11</option>
<option name ="month" value="12">12</option>
</select>
<select name ="day">
<option name ="day" value="1">1</option>
<option name ="day"value="2">2</option>
<option name ="day" value="3">3</option>
<option name ="day" value="4">4</option>
<option name ="day" value="5">5</option>
<option name ="day" value="6">6</option>
<option name ="day" value="7">7</option>
<option  name ="day" value="8">8</option>
<option name ="day" value="9">9</option>
<option name ="day" value="10">10</option>
<option name ="day" value="11">11</option>
<option name ="day" value="12">12</option>
<option name ="day" value="13">13</option>
<option name ="day" value="14">14</option>
<option name ="day" value="15">15</option>
<option name ="day" value="16">16</option>
<option name ="day" value="17">17</option>
<option name ="day" value="18">18</option>
<option name ="day" value="19">19</option>
<option name ="day" value="20">20</option>
<option name ="day" value="21">21</option>
<option name ="day" value="22">22</option>
<option name ="day" value="23">23</option>
<option name ="day" value="24">24</option>
<option name ="day" value="25">25</option>
<option name ="day" value="26">26</option>
<option name ="day" value="27">27</option>
<option name ="day" value="28">28</option>
<option name ="day" value="29">29</option>
<option name ="day" value="30">30</option>
<option name ="day" value="31">31</option>
</select>
<select name ="year">
<option  name ="year" value="1990">1990</option>
<option name ="year" value="1991">1991</option>
<option name ="year" value="1992">1992</option>
<option name ="year" value="1993">1993</option>
<option name ="year" value="1994">1994</option>
<option name ="year" value="1995">1995</option>
<option name ="year" value="1996">1996</option>
<option name ="year" value="1997">1997</option>
<option name ="year" value="1998">1998</option>
<option name ="year" value="1999">1999</option>
<option name ="year" value="2000">2000</option>
<option name ="year" value="2001">2001</option>
<option name ="year" value="2002">2002</option>
<option name ="year" value="2003">2003</option>
<option name ="year" value="2004">2004</option>
<option name ="year" value="2005">2005</option>
<option name ="year" value="2006">2006</option>
<option name ="year" value="2007">2007</option>
<option name ="year" value="2008">2008</option>
<option name ="year" value="2009">2009</option>
<option name ="year" value="2010">2010</option>
</select><br>-->
Gender: <input type="radio" name = "gender" value = "male">Male <input type="radio" name = "gender" value = "female">Female <br>
<!--<input type="checkbox" name="agree" onchange="activateButton(this)" required> I agree with Terms and Conditions <br>-->
<input type = "submit" value = "Sign up">
</body>
</html>