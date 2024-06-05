<?php
	if (isset($_POST['envoyer'])) 
	{
		$ok = $_GET['ok'];
		$code = $_POST['code'];
		$libelle = $_POST['libelle'];
		$objet = $code.";".$libelle."\n";
		$f = fopen("../Model/classe.csv", "r");
		$tmp = fopen("../Model/tmp.csv", "a");
		while ($tab = fgetcsv($f,1000,";")) 
		{
			if ($ok != $tab[0]) 
			{
				$tampon = $tab[0].";".$tab[1]."\n";
				fwrite($tmp, $tampon);
			}
			else
			{
				fwrite($tmp, $objet);
			}
		}
		fclose($f);
		fclose($tmp);
		copy("../Model/tmp.csv", "../Model/classe.csv");
		unlink("../Model/tmp.csv");
		header("location:../Views/LClasse.php");
	}
?>