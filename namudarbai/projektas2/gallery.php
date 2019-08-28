<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="app/css/materialize.min.css">
	<style>
		nav .nav-wrapper ul li a, #mobile-demo li a{
			color: #ffa000;
		}
		main{
			height: 100vh;
		}
		.slides{
			height: 96% !important;
		}
		.slider{
			height: 99% !important;
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

			<div class="slider">
				<ul class="slides">
					<li>
						<img src="app/images/baronuotrauka.jpg">
						<div class="caption center-align amber-text">
							<h3><b>Baras Flomby!</b></h3>
							<h5 class="light grey-text text-lighten-3">Laukiame Jūsų!</h5>
						</div>
					</li>

					<li>
						<img src="app/images/baronuotraukasualumi.jpg">
						<div class="caption right-align amber-text">
							<h3><b>Baras Flomby!</b></h3>
							<h5 class="light grey-text text-lighten-3">Įvairus alus mūsų bare!</h5>
						</div>
					</li>

					<li>
						<img src="images/barolinksmybes.jpg">
						<div class="caption left-align amber-text">
							<h3><b>Baras Flomby!</b></h3>
							<h5 class="light grey-text text-lighten-3">Visada geriausia muzika!</h5>
						</div>
					</li>

					<li>
						<img src="app/images/baromaistas.jpg">
						<div class="caption right-align amber-text">
							<h3><b></b></h3>
							<h5 class="light red-text text-lighten-3"></h5>
						</div>
					</li>

					<li>
						<img src="app/images/baromaistas2.jpg">
						<div class="caption left-align amber-text">
							<h3><b>Baras Flomby!</b></h3>
							<h5 class="light grey-text text-lighten-3">Skaniausias maistas mieste!</h5>
						</div>
					</li>

					<li>
						<img src="app/images/baromaistas3.jpeg">
						<div class="caption left-align amber-text">
							<h3><b>Baras Flomby!</b></h3>
							<h5 class="light grey-text text-lighten-3">Skaniausias maistas mieste!</h5>
						</div>
					</li>

					<li>
						<img src="app/images/baromaistas4.jpg">
						<div class="caption left-align amber-text">
							<h3><b></b></h3>
							<h5 class="light grey-text text-lighten-3"></h5>
						</div>
					</li>
				</ul>
			</div>

	</main>

		<footer class="page-footer brown darken-2">

			<div class="footer-copyright">
				<div class="container amber-text text-darken-2">
					© 2019 Vilnius, Lithuania
					<a class="amber-text text-darken-1 right" href="contacts.php">Kontaktai</a>
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
				var elems = document.querySelectorAll('.slider');
				var instances = M.Slider.init(elems, {});
			});

		</script>

	</body>
</html>
