<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="LClasse.php">Gestion des classes</a></li>
			<li><a href="LEtudiant.php">Gestion des étudiants</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des classes</div>
				<div class="panel-body">
					<a href="FAjoutClasse.php" class="btn btn-info">Nouvelle classe</a>
					<table class="table table-bordered table-striped">
						<tr>
							<th>Code classe</th>
							<th>Libellé classe</th>
							<th>Action</th>
							<th>Action</th>
						</tr>
						<?php
							$f = fopen("../Model/classe.csv", "r");
							while ($tab = fgetcsv($f,1000,";")) 
							{
								echo "<tr>";
									echo "<td>$tab[0]</td>";
									echo "<td>$tab[1]</td>";
									echo "<td><a href='FModifClasse.php?code=$tab[0]&libelle=$tab[1]' class='btn btn-info btn-block'>Modifier</a></td>";
									echo "<td><a href='../Controller/TSuppClasse.php?code=$tab[0]' class='btn btn-warning btn-block' onClick='return confirmation();'>Supprimer</a></td>";
								echo "</tr>";
							}
						?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>