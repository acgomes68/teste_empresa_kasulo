<?php
$pos = strpos($_SERVER['HTTP_HOST'], 'localhost');
$redirectURL = $pos === false ? 'https://kasulo.000webhostapp.com/' : './login/public/';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kasulo Pay- Teste</title>
	<link rel="shortcut icon" href="favicon.ico" ></head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-3 col-md-offset-3" align="center">
				<img src="img/logo.png">
				<ul>
					<li><a href="./facebook/login.php">Teste Facebook</li>
					<li><a href="./login/public/">Teste Login</li>
					<li><a href="#">Teste Questionário</li>
				</ul>
			</div>
		</div>
	</div>

	</body>
</html>