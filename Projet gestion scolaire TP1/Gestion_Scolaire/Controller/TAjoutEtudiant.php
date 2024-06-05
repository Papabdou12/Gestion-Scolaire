<?php
	require_once 'genererMat.php';
	if (isset($_POST['envoyer'])) 
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$genre = $_POST['genre'];
		$naiss = $_POST['naiss'];
		$lieu = $_POST['lieu'];
		$classe = $_POST['classe'];
		$mat = generer($nom,$prenom,$naiss);
		$objet = $mat.";".$nom.";".$prenom.";".$genre.";".$naiss.";".$lieu.";".$classe."\n";
		$f = fopen("../Model/etudiant.csv", "a");
		$resultat = fwrite($f, $objet);
 		if ($resultat) 
 		{
 			header("location:../Views/FAjoutEtudiant.php?ok=1");
 		}


	}
?>