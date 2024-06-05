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
			<div class="panel-heading">Formulaire d'inscription</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TAjoutEtudiant.php">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="nom" class="form-control">
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" name="prenom" class="form-control">
						</div>
						<div class="radio">
							<label>Genre</label><br>
							<label><input type="radio" name="genre" value="M">Masculin</label><br><br>
							<label><input type="radio" name="genre" value="F">Feminin</label>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label>Né(e) le</label>
							<input type="date" name="naiss" class="form-control">
						</div>
						<div class="form-group">
							<label>Lieu</label>
							<input type="text" name="lieu" class="form-control">
						</div>
						<div class="form-group">
							<label>Classe</label>
							<select name="classe" class="form-control">
								<option>Choisir une classe</option>
								<?php
									$f = fopen("../Model/classe.csv", "r");
									while ($tab = fgetcsv($f,1000,";")) 
									{
										echo "<option value='$tab[0]'>$tab[0]</option>";
									}
								?>
							</select>
						</div>
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