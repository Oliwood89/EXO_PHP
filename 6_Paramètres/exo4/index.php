<?php

if (isset($_GET['langage']) AND isset($_GET['serveur'])) // On a le nom et le prénom
{
	echo 'Vous travaillez actuellement avec ' . $_GET['langage'] . ' sur ' . $_GET['serveur'] . '.';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un langage et un serveur !';
}

?>