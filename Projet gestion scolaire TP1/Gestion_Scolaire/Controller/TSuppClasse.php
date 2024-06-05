<?php
	if (isset($_GET['code'])) 
	{
		$code = $_GET['code'];
		$f = fopen("../Model/classe.csv", "r");
		$tmp = fopen("../Model/tmp.csv", "a");
		while ($tab = fgetcsv($f,1000,";")) 
		{
			if ($code != $tab[0]) 
			{
				$tampon = $tab[0].";".$tab[1]."\n";
				fwrite($tmp, $tampon);
			}
		}
		fclose($f);
		fclose($tmp);
		copy("../Model/tmp.csv", "../Model/classe.csv");
		unlink("../Model/tmp.csv");
		header("location:../Views/LClasse.php");
	}
?>