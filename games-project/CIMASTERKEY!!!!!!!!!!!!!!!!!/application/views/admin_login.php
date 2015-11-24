<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
</head>
<body>
	<h3>Admin Login Page</h3>
	<form method="post" action="/admins/validate_admin">
		Email:<input type="text" name="email"><br>
		Password:<input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>

<?php  echo $this->session->flashdata('error');
?>



</body>
</html>