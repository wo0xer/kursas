<?php
		//isset reikia cia parasyti
	if(isset($_REQUEST['plotis']) &&  isset($_REQUEST['ilgis'])) {
		if(is_numeric($_REQUEST['plotis']) &&  is_numeric($_REQUEST['ilgis'])) {
			echo 'Staciakampio plotas yra: ' .($_REQUEST['plotis'] * $_REQUEST['ilgis']). ' metrų.';
			die();
		}
	}
?>

<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	<form action="<?php $_PHP_SELF; ?>" method="POST">
		Plotis: <input type="text" name="plotis">
		Ilgis: <input type="text" name="ilgis">
		<input type="submit">
	</form>
</body>
</html>



<!--- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. Įvestus duomenis panaudokite stačiakampio ploto apskaičiavimui. Rezultatą išveskite į naršyklę. Forma turėtų dingti, kai išvedamas rezultatas, o rezultato spausdinimas turėtų būti tik tuomet, kai vartotojas užpildė visus laukelius ir paspaudė mygtuką.-->
