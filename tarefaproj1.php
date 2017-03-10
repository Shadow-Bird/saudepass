<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>

<table id="tabela">
		<tr>
			<th abr="Nome">Nome</th>
			<th abr="Data">Data</th>
			<th abr="Descrição">Descrição</th>
			<th abr="Prioridade">Prioridade</th>
			<th abr="Conclusão">Conclusão</th>
		</tr>
			
		<?php
		
			echo "<tr>";
				echo "<td>" . $_POST['nome']  . "</td>";
				echo "<td>" . $_POST['date']  . date("Y/m/d") . "</td>";
				echo "<td>" . $_POST['descricao'] . "</td>";
				echo "<td>" . $_POST['prioridade']  . "</td>";						
				echo "<td>" . $_POST['conclusao']  . "</td>";						
			echo "</tr>";	

			session_start();
				error_reporting(0);
				ini_set("display_erros", 0);						

				$total = count($_SESSION['nomes']);						

				for($i=0;$i<$total;$i++)
				{
					echo "<tr>";
						echo "<td>" . $_SESSION['nomes'] [$i] . "</td>";
						echo "<td>" . $_SESSION['dates'] [$i] . date("Y/m/d") ."</td>";
						echo "<td>" . $_SESSION['descricaos'] [$i] . "</td>";
						echo "<td>" . $_SESSION['prioridades'] [$i] . "</td>";
						echo "<td>" . $_SESSION['conclusaos'] [$i] . "</td>";
					echo "</tr>";
				}
		?>
		
		<?php
			session_start();
			$_SESSION['nomes'] [] = $_POST['nome'];
			$_SESSION['dates'] [] = $_POST['date'];
			$_SESSION['descricaos'] [] = $_POST['descricao'];
			$_SESSION['prioridades'] [] = $_POST['prioridade'];
			$_SESSION['conclusaos'] [] = $_POST['conclusao'];
		?>
		
		</table>

		<form action="indexproj1.php">
			<button>Voltar</button>
		</form>
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
</html>
