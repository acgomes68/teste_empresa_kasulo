<?php
require_once 'config.php';

if (isset($_SESSION['access_token'])) {
	header('Location: index.php');
	exit;
}


$pos = strpos($_SERVER['HTTP_HOST'], 'localhost');
$protocolo = $pos === false ? 'https' : 'http';
$redirectURL = $protocolo . '://' . $_SERVER['HTTP_HOST'] . '/facebook/fb-callback.php';
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kasulo Pay- Teste Facebook</title>
	<link rel="shortcut icon" href="../favicon.ico" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="../img/logo.png">
				<form method="post">
					<input type="button" onclick="javascript: window.location = '/'" value="Voltar" class="btn btn-secondary">
					<input type="button" onclick="javascript: window.location = '<?php echo $loginURL; ?>';" value="Log In With Facebook" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>