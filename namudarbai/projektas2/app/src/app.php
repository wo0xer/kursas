<?php
	//spausdiname visus duomenis is POST
	//var_dump($_POST);

	//echo $_POST['vardas'] . '<br>' . $_POST['email'] . '<br>' . $_POST['message'];

	if(isset($_POST['submit'])) {

	$vardas = trim($_POST['vardas']);
	$gimdata = trim($_POST['gimdata']);
	$telnr = trim($_POST['telnr']);
	$email = trim($_POST['email']);

	if(!empty($vardas) && !empty($gimdata) && !empty($telnr) && !empty($email)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$from = "$email";
			$to = "wxrpoker@gmail.com";
			$subject = "Nauja žinutė";
			$autorius = 'Nuo: ' . $vardas . ', ' . $email;
			$telnr = htmlspecialchars($telnr);
			mail($to, $subject, $autorius, $telnr, $from);
			echo "<script>alert('Dėkojame. Savo kortelę galėsite atsiimti kito apsilankimo metu.');</script>";
		}
	}

	include('db.php');
}
