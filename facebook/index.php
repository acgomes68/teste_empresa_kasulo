<?php
session_start();

if (!isset($_SESSION['access_token'])) {
	header('Location: login.php');
	exit;
}
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
			<div class="col-md-3">
				<img src="<?php echo $_SESSION['userData']['picture']['url']; ?>" />
			</div>
			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id']; ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name']; ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name']; ?></td>
						</tr>
						<tr>
							<td>E-Mail</td>
							<td><?php echo $_SESSION['userData']['email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<form method="post">
					<input type="button" onclick="javascript: window.location = 'logout.php';" value="Log Out From Facebook" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
</body>
</html>	
