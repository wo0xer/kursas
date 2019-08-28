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

		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image center">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.8772188038356!2d25.284625915443527!3d54.71178327926006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b2867727cd%3A0x8d87d0b007cd61ff!2sVilnius+coding+school!5e0!3m2!1slt!2slt!4v1565370035479!5m2!1slt!2slt" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<div class="card-content">
						<h5>Kontaktai</h5><br>
						<p><i>Baras</i> <b>Flomby</b></p>
						<p><i>Adresas</i> : <b>Kalvarijų g. 125</b>, Vilnius 08221, Lithuania</p>
						<p><i>Tel. Nr.</i> : <a href="tel:+370 67869393"><b>+370 67869393</b></a></p>
						<p><i>El. Paštas</i> : <b>baras@flomby.lt</b></p>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
				<div class="card">
					<div class="card-image center">
						<img src="app/images/nuolaidukortele2.jpg">
						<span class="card-title amber-text text-darken-1 right"><a id="nuolaidukortele">Gauti nuolaidų kortelę:</a></span>
					</div>

					<div class="card-content">
						<div class="row">
							<form action="contacts.php" method="post" class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<i class="material-icons prefix">account_circle</i>
										<input id="icon_prefix" type="text" name="vardas" class="validate">
										<label for="icon_prefix">Vardas Pavardė</label>
									</div>

									<div class="input-field col s6">
										<i class="material-icons prefix">date_range</i>
										<input id="icon_telephone" type="text" name="gimdata" class="validate">
										<label for="icon_telephone">Gim. data</label>
									</div>

									<div class="input-field col s6">
										<i class="material-icons prefix">phone</i>
										<input id="icon_telephone" type="text" name="telnr" class="validate">
										<label for="icon_telephone">Tel. Nr.</label>
									</div>

									<div class="input-field col s6">
										<i class="material-icons prefix">mail</i>
										<input id="icon_telephone" type="email" name="email" class="validate">
										<label for="icon_telephone">El. Paštas</label>
									</div>

									<div class="input-field col s12 center">
										<button class="btn waves-effect waves-light orange darken-1 black-text" type="submit" name="submit">Siusti
										<i class="material-icons right">send</i>
										</button>
									</div>

								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
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

		</script>

	</body>
</html>
