<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-script src="js/bootstrap.js"></script>
	</head>	
	<body>
		<div class="container">
			<div class="col-sm-12">
				<div class="headerLogin">
				</div>
			</div>	
		<div class="col-sm-12">
			<div class="formLogin">
				<form action='senha.php' method='post'>
					<fieldset>
						<legend>Login</legend>
							<input type="text" name="login" placeholder="Usuário" required>
								<br><br>
							<input type="password" name="senha" placeholder="****" required>
					</fieldset>
					<br>
					<p>
						<button type='submit'>Logar</button> 
					</p>
					<br>
				</form>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="footerLogin">
			</div>
		</div>
		</div>	
	</body>
</html>