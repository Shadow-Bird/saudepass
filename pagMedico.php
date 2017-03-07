<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--scripts seguintes sao necessarios para funcionar o dropdown e o navbar-collapse-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<!--navbar e sidebar serao visiveis juntos quando tamanho da tela for XS-->
	<nav class="navbar navbar-default visible-xs" style="margin-bottom:0;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="#">Clínica</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">	
				<ul class="nav navbar-nav">
					<li id="firstItem"><a href="#">Dados Pessoais</a></li>
					<li id="firstItem"><a href="#">Atendimentos</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Prontuário Eletrônico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 3</a></li>
								<li><a href="#">Page 4</a></li>
							</ul>
					</li>
					<li><a href="#">about</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!--quando tamanho de tela for XS, o Logo e Logoff serão escondidos-->
	<nav class="navbar navbar-default hidden-xs" style="margin-bottom:0;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Clínica</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">	
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!--menu sidebar-->
	<div class="container-fluid">
		<div class="row content">
			<div class="col-sm-2 sidenav hidden-xs" style="background-color:#198080;">
				 <img src="imagens/imgmed.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
				<h4>Dr. Nome Médico</h4>
					<ul class="nav nav-pills nav-stacked">
						<li id="firstItem"><a href="#">Dados Pessoais</a></li>
						<hr>
						<li id="firstItem"><a href="#">Atendimentos</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Prontuário Eletrônico<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Page 3</a></li>
									<li><a href="#">Page 4</a></li>
								</ul>
						</li>
						<li><a href="#">about</a></li>
					</ul>
			</div>
		
		
		
		
		
		
		
		
		
		
		</div>
	</div>
	
	

</body>
</html>