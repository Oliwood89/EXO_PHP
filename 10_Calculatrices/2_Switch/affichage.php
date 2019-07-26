<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Calculatrice en PHP</title>
    </head>

	<body>
        <div id="bloc_page">
                <header>
                    <h1>Calculatrice PHP avec 'switch'</h1>
                </header>
	<div style="text-align:center">

		<form name="formulaire" method="get" action="calculs.php"> 
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