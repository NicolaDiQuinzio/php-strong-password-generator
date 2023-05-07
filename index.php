<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
<body>
<div class=" container d-flex justify-content-center align-items-center flex-column">
	<h1>Password Generator</h1>
	<form method="get">
		<label for="password_length">Password length:</label>
		<input type="number" name="password_length" id="password_length" min="1" max="100" value="8" />
		<button type="submit">Generate</button>
	</form>

	<?php
		include 'function.php';
		if (isset($_GET['password_length'])) {
			$password_length = $_GET['password_length'];
			$password = generatePassword($password_length);
			echo "<p>Your password is: $password</p>";
		}
	?>
    </div>
</body>
</body>
</html>