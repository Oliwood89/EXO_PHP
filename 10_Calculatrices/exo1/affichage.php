<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calculatrice en PHP</title>
    </head>

	<body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <h1>Calculatrice PHP avec 'if'</h1>
                </div>
	<div style="text-align:center">

		<form name="formulaire" method="post" action="calculs.php"> 
			<p>nombre1:<input name="nombre1" type="text" ></p> 
			<p>nombre2:<input name="nombre2" type="text" ></p> 

	<select name="choix">
		<option value="addition">+</option>
		<option value="soustraction">-</option>
		<option value="division">/</option>
		<option value="multiplication">*</option>
	</select>

		<input type="submit" value="calculer">
		<input type="reset" value="effacer"><br> 

		</form>
</div>

</body>
</html>