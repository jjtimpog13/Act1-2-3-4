<!DOCTYPE html>
<html>
<head>
	<title>Timpog Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Username</label>
				<input type="text" id="user" placeholder="Enter Username" name="user">
			</p>

			<p>
				<label>Password</label>
				<input type="password" id="pass" placeholder="Enter Password" name="pass">
			</p>
			
			<p>
				<input type="submit" id="btn" value="Login">
			</p>
		</form>

</body>
</html>