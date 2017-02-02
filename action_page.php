<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="styles.css" title="Main Styles">
	</head>
	<body>
		<?php
			$username = $password = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$username = test_input($_POST['username']);
				$password = test_input($_POST['password']);
				if($username == "ricky" && $password == "hello") {
					showContent('#write');
				}
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<div class="sub-content" id="write">
			<h2>New entry</h2>
			<form>
				Title:<br>
				<input type="text" name="title"><br>
				Body:<br>
				<textarea name="entry" rows="10" cols="60">Add text here.</textarea>
				<br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
</html>