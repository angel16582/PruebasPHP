<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="pcocesoCal.php" method="post" name="calculadora">
		<label>Coloque los valores</label><br/>
		<input type="text" name="c1"> <br/> <br/>
		<input type="text" name="c2"> <br/> <br/>
		<input type="text" name="c3"> <br/> <br/>

		<label>Selecciona la operacion</label><br/>
		<select name="lista">
			<option value="sumar">Sumar</option>
			<option value="restar">Restar</option>
			<option value="div">Dividir</option>
			<option value="mul">Multiplicar</option>

		</select>
		<input type="submit" value="Resultados">


	</form>

</body>
</html>