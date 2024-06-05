<?php
function generer($nom, $prenom, $naiss)
{
	$ch1 = substr($nom,0,1);
	$ch2 = substr($prenom,0,2);
	$ch3 = substr($naiss,0,4);
	$mat = $ch1.$ch2.$ch3;
	return $mat;
}

?>