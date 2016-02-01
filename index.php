<?php
mysql_connect("sql111.byethost22.com","b22_17207216", "Konjina1") or die("Can't connect to SQL server");
mysql_select_db("b22_17207216_players") or die("Can't select database");

$reg = @$_POST['reg'];

$un = "";
$em = "";
$pw = "";
$pw2 = "";
$race = "";
$d = "";
$u_check = "";

$un = strip_tags(@$_POST['username']);
$em = strip_tags(@$_POST['email']);
$pw = strip_tags(@$_POST['password']);
$pw2 = strip_tags(@$_POST['confpassword']);
$race = strip_tags(@$_POST['race']);
$d = date(Y-m-d);

if ($reg) {

	if ($pw == $pw2) {
		$u_check = mysql_query("SELECT username FROM users WHERE username='$un'");
		$check = mysql_num_rows($u_check);

		if ($check == 0) {

			if ($un&&$em&&$pw&&$pw2) {

				$query = mysql_query("INSERT INTO users VALUES ('','$un','$em','$pw','$race','$d')");
				die("Alden je feget");


			} else {echo "string";}
		}else {echo "string";}
	}else {echo "string";} 

}


?>




<html>
<head>
	<title>Exocation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="reg_form">
		<img src="logo.png"><br><br>
			<form action="index.php" method="POST">
				Username:<br>
				<input type="text" name="username"><br><br>
				Email:<br>
				<input type="text" name="email"><br><br>
				Password:<br>
				<input type="text" name="password"><br><br>
				Confirm Password:<br>
				<input type="text" name="confpassword"><br><br>
				Select Your Race:<br>
				<input type="radio" name="race" value="human" checked> Human<br>
  				<input type="radio" name="race" value="elf"> Elf<br>
  				<input type="radio" name="race" value="orc"> Orc<br>
  				<input type="radio" name="race" value="dwarf"> Dwarf<br>
  				<input type="radio" name="race" value="myceanea"> Myceanea<br>
  				<br><input type="submit" name="reg" value="Register">


			</form>
			<br>
			<a href="login.php">Already a member? Log In</a>
		</div>
</html>