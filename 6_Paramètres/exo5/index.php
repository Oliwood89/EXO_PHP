<?php

if (isset($_GET['semaine'])) // On a le nom et le prénom
{
	echo 'Nous sommes actuellement à la ' . $_GET['semaine'] . 'ème semaine de formation.';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner la semaine !';
}

?>