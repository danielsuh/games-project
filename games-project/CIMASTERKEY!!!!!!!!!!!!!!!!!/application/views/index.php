<html>
<head>
	<title>Great Number Game</title>
</head>
<body>
	<div id = 'container'>
		<?= $this->session->userdata['number'] ?>
		<h1>Welcome to the Game</h1>
		<P>I am thinking of a number between 1 and 100</P>
		<p>Take a guess</p>
		<form action = 'check' method = 'post'>
			<input type = 'text' name = 'guess' />
			<input type = 'submit' name = 'Submit' />
		</form>
	</div>
</body>
</html>