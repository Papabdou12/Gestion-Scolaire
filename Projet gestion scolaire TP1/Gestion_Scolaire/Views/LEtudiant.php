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
	<div class="container col-md-8 col-md-offset-2 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des étudiants</div>
				<div class="panel-body">
					<a href="FAjoutEtudiant.php" class="btn btn-info">Inscription</a>
					<table class="table table-bordered table-striped">
						<tr>
							<th>Matricule</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Genre</th>
							<th>Date de naissance</th>
							<th>Lieu de naissance</th>
							<th>Classe</th>
							<th>Action</th>
							<th>Action</th>
						</tr>
						<?php
							$f = fopen("../Model/etudiant.csv", "r");
							while ($tab = fgetcsv($f,1000,";")) 
							{
								echo "<tr>";
									for ($i=0; $i < count($tab) ; $i++) 
									{ 
										echo "<td>$tab[$i]</td>";
									}
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