<?php 
	
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost","root","");
	mysql_select_db("login1");

	$result = mysql_query("Select * from users where username = '$username'and password ='$password'") or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] ==$username && $row['password'] == $password) {
		echo "<center><h1>Login Success!</h1></center>";
	}else {
		echo "<center><h1>Failed to Login! Please Try Again.</h1></center>";
	}
?>