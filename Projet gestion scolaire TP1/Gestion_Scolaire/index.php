<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Views/style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="Views/style/style.css">
</head>
<body>
<div class="container col-md-4 col-md-offset-4 marge">
	<div class="panel panel-info">
		<div class="panel-heading">Connexion</div>
		<form method="POST" action="Controller/TConnexion.php">
			<div class="form-group">
				<label>Login</label>
				<input type="text" name="login" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Mot de passe</label>
				<input type="password" name="password" class="form-control" required="">
			</div>
			<div class="form-group">
				<input type="submit" name="envoyer" value="Envoyer" class="btn btn-success">
				<input type="reset" name="annuler" value="Annuler" class="btn btn-danger">
			</div>
		</form>
	</div>
</div>
</body>
</html>