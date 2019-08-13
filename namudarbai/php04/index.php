<?php $cities = [ 'Berlynas', 'Roma', 'Londonas'];
	print_r($cities);
	$cities[] = 'Tokijas';
	print_r($cities);
	$cities2 = [
		'tokijas' => 13.6,
		'vasingtonas' => 0.6,
		'maskva' => 11.5
	];
	$cities2['londonas'] = 8.6;
	print_r($cities2);
?>
<body>
	<table>

		<ul>
			<li><?php echo  $cities[1]; ?></li>
		</ul>

		<ul>
			<li>Gyventoju skaicius: <?php echo $cities2['tokijas'] ?> mln.</li>
		</ul>

	</table>
</body>


<!--
- Sukurk masyvą $cities ir priskirk ‘Berlynas’, ‘Roma’, ‘Londonas’
- Panaudok print_r funkciją taip, kad ji išvestų masyvo $cities duomenis
- HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą.
- Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas”
- Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
- Pridėk: londonas - 8.6
- HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.”
- Sprendimą įkelk į GitHub
-->
