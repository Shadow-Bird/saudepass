<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--scripts seguintes sao necessarios para funcionar o dropdown e o navbar-collapse-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css">
	<script src="bootstrap-select/dist/js/bootstrap-select.min.js"></script>
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
					<li><a href="pagAtendimentoAgenda.php">Agenda</a></li>
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Pacientes<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Consultar Pacientes</a></li>
							<li><a href="#">Cadastrar Pacientes</a></li>
						</ul>
					</li>
					<li><a href="pagAtendimentoAgenda.php">Pagamento</a></li>
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
				 <img src="imagens/imgatend.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
				<h4>Nome Atendente</h4>
				<hr>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="pagAtendimentoAgenda.php">Agenda</a></li>
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Pacientes<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Consultar Pacientes</a></li>
								<li><a href="#">Cadastrar Pacientes</a></li>
							</ul>
						</li>
						<li><a href="pagAtendimentoAgenda.php">Pagamento</a></li>
					</ul>
			</div>
			
			<div class="col-sm-10">
					<form>
						<h3>Consultar Atendimentos</h3>
						<hr>
							<select class="selectpicker">
								<option>Nome Paciente</option>
								<option>CPF</option>
							</select>
							<input type="text" style='width:220px;border:none;border-bottom:solid;margin-right:70px;'>
							<button type="button" id="btnsearch" class="glyphicon glyphicon-search"></button>
							<a href="pagAtendimentoIncluir.php" id="btnplus" class="glyphicon glyphicon-plus"></a>
					</form>
					<hr>
					<h3>Atendimentos Registrados</h3>
					<table>
					  <tr>
						<th>Nome Paciente</th>
						<th>Médico</th>
						<th>Data/Hora</th>
						<th></th>
					  </tr>
					  <tr>
						<td>Peter</td>
						<td>Griffin</td>
						<td>10/01/2010 9:00am</td>
						<td><a href class="glyphicon glyphicon-pencil"></a> <a href class="glyphicon glyphicon-remove"></a></td>
					  </tr>
					  <tr>
						<td>Lois</td>
						<td>Griffin</td>
						<td>12/04/2010 15:00pm</td>
						<td><a href class="glyphicon glyphicon-pencil"></a> <a href class="glyphicon glyphicon-remove"></a></td>
					  </tr>
					  <tr>
						<td>Joe</td>
						<td>Swanson</td>
						<td>21/03/2012 11:00pm</td>
						<td><a href class="glyphicon glyphicon-pencil"></a> <a href class="glyphicon glyphicon-remove"></a></td>
					  </tr>
					  <tr>
						<td>Cleveland</td>
						<td>Brown</td>
						<td>15/05/2014 9:30pm</td>
						<td><a href class="glyphicon glyphicon-pencil"></a> <a href class="glyphicon glyphicon-remove"></a></td>
					</tr>
				</table>
				
				
				
				
			</div>
			
		
		
		
		
		
		
		
		
		
		
		</div>
	</div>
	
	

</body>
</html>