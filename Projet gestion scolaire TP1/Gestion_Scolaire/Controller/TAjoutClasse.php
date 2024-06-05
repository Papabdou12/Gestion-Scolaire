<?php
 	if (isset($_POST['envoyer'])) 
 	{
 		$code = $_POST['code'];
 		$libelle = $_POST['libelle'];
 		$objet = $code.";".$libelle."\n";
 		$f = fopen("../Model/classe.csv", "a");
 		$resultat = fwrite($f, $objet);
 		if ($resultat) 
 		{
 			header("location:../Views/FAjoutClasse.php?ok=1");
 		}

 	}

?>