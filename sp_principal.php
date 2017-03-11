<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
	<!--scripts seguintes sao necessarios para funcionar o dropdown e o navbar-collapse-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<!--menu aparece em tamanho menor de tela, xs-->
	<nav class="navbar visible-xs">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Perfil</a></li>
						<li><a href="#">Message</a></li>
						<li role="presentation" class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>teste</li>
								<li>teste</li>
								<li>teste</li>
							</ul>
						</li>
					</ul>
				</div>	
			</nav>
		</div>
	</nav>
	
	<!--navbar aparece em tamanhos maiores de tela, mas desaparece no tamnho xs-->
	<nav class="navbar hidden-xs">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation"><a href="#">Perfil</a></li>
			<li role="presentation"><a href="#">Message</a></li>					
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>teste</li>
						<li>teste</li>
						<li>teste</li>
					</ul>
			</li>
			<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row content">
			
		</div>
	</div>

</body>
</html>