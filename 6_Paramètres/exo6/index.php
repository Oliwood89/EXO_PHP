<?php

if (isset($_GET['batiment']) AND isset($_GET['salle'])) // On a le nom et le prénom
{
	echo 'Vous devez vous rendre au bâtiment ' . $_GET['batiment'] . ' à la salle numéro ' . $_GET['salle'] . '.';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un numéro de bâtiment et de salle !';
}

?>