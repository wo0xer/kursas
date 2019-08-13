<?php
	$cities3 = [
		'Tokijas' => [13.6, 1868, 'Japonija'],
		'Vasingtonas' => [0.6, 1790, 'JAV'],
		'Maskva' => [11.5, 1147, 'Rusija']
	];

	$cities3['Londonas'] = [8.6, 43, 'Anglija'];
	#print_r($cities3); pasitikrinti
?>

<body>
	<table>

		<ul>
			<li> Gyventojų skaičius: <?php echo $cities3['Londonas'][0]; ?> mln.</li>
			<li> Įkurtas: <?php echo $cities3['Londonas'][1]; ?> m.</li>
			<li> Šalis: <?php echo $cities3['Londonas'][2]; ?></li>
		</ul>

	</table>
</body>





<!--
- Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys:
- Tokijas - 13.6, 1868, Japonija
- Vasingtonas - 0.6, 1790, JAV
- Maskva - 11.5, 1147, Rusija
- Pridėk: Londonas - 8.6, 43, Anglija
- HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu:
- Gyventojų skaičius: 8.6 mln.
- Įkurtas: 43 m.
- Šalis: Anglija-->
