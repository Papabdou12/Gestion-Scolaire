<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<?php
		if (isset($_GET['ok'])) 
		{
			$ok = $_GET['ok'];
			if ($ok == 1) 
			{
				echo "<div class='alert alert-success'>Données ajoutées avec succès</div>";
			}
			else
			{
				echo "<div class='alert alert-danger'>Données non ajoutées</div>";
			}
		}
	?>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="LClasse.php">Gestion des classes</a></li>
			<li><a href="LEtudiant.php">Gestion des étudiants</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Formulaire d'ajout de classe</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TAjoutClasse.php">
					<div class="form-group">
						<label>Code Classe</label>
						<input type="text" name="code" class="form-control">
					</div>
					<div class="form-group">
						<label>Libellé Classe</label>
						<input type="text" name="libelle" class="form-control">
					</div>
					<div class="form-group">
				<input type="submit" name="envoyer" value="Envoyer" class="btn btn-success">
				<input type="reset" name="annuler" value="Annuler" class="btn btn-danger">
			</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>