<?php
	require __DIR__ . '../app/src/app.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="app/css/materialize.min.css">
	<style>
		nav .nav-wrapper ul li a, #mobile-demo li a{
			color: #ffa000;
		}
	</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

	<body>
		<nav class="brown lighten-1">
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo amber-text text-darken-2"><b>Baras Flomby</b></a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a class="amber-text text-darken-2" href="index.php">Pagrindinis</a></li>
					<li><a href="gallery.php">Galerija</a></li>
					<li><a href="contacts.php">Kaip mus rasti!</a></li>
				</ul>
			</div>
		</nav>

		<ul class="sidenav brown lighten-1" id="mobile-demo">
			<li><a href="index.php">Pagrindinis</a></li>
			<li><a href="gallery.php">Galerija</a></li>
			<li><a href="contacts.php">Kaip mus rasti!</a></li>
		</ul>

	<main>
			<div class="parallax-container">
			<div class="parallax"><img src="app/images/taures.jpg"></div>
			</div>
			<div class="section brown lighten-2 amber-text text-accent-4">
				<div class="row container">
					<h2 class="header" id="parallax">Baras <b>Flomby</b></h2>
					<p class="brown-text text-darken-4 lighten-3">Visika naujiena mieste Baras <b>Flomby</b> ! Ruošiami banketai, vestuvės, audringi vakarai (iki 100 asm.), yra prabangūs apartamentai iki 100 vietų. Ruošiame įvairų maistą išsinešimui, tame tarpe vieno kąsnio sumuštiniai, farširuotos žuvys ir t.t. Skanūs ir nebrangūs dienos pietūs, su galimybe didesnį kiekį pristatyti į Jūsų nurodytą vietą. Meniu kiekvieną dieną keičiamas. Labai didelė ir jauki lauko terasa. Draugiškas baro kolektyvas laukia Jūsų.</p>
				</div>
			</div>
			<div class="parallax-container">
				<div class="parallax"><img src="app/images/bokalai.jpg"></div>
			</div>

			<div class="section brown lighten-2 amber-text text-darken-2">
				<div class="row container">
					<h2 class="header" id="galerija">Gaukite nuolaidų kortelę <strong>nemokamai!</strong></h2>
					<p class="grey-text text-darken-3 lighten-3">Gautkite nuolaidų kortelę visiškai <b>nemokamai</b> ! Jum tereikia užsiregistruoti mūsų puslapyje <strong><a href="contacts.html#nuolaidukortele">ČIA</a></strong> !</p>
				</div>
			</div>
			<div class="parallax-container">
				<div class="parallax"><img src="app/images/nuolaidukortele.jpg"></div>
			</div>

	</main>

	<footer class="page-footer brown darken-2">

			<div class="footer-copyright">
				<div class="container amber-text text-darken-2">
					© 2019 Vilnius, Lithuania
					<a class="amber-text text-darken-1 right" href="contacts.html">Kontaktai</a>
				</div>
			</div>
	</footer>

	<script type="text/javascript" src="app/js/materialize.min.js"></script>
	<script>

			document.addEventListener('DOMContentLoaded', function() {
				 var elems = document.querySelectorAll('.sidenav');
				 var instances = M.Sidenav.init(elems, {});
			});

			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.parallax');
				var instances = M.Parallax.init(elems, {});
			});

			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.carousel');
				var instances = M.Carousel.init(elems, {});
			});

			var instance = M.Carousel.init({
				fullWidth: true
			});

	</script>

	</body>
</html>
