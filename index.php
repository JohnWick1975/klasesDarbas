<?php include_once 'app/php/php.php';
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Form</title>
		<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
		<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div>
				<?php for ($x = 1; $x <= $deziuKiekis; $x++) : ?>
					<img src="https://i.pinimg.com/474x/94/43/ab/9443ab87302b51ad59d70656ff048c5c--jack-daniels-daniel-oconnell.jpg"
						 alt="">
                <?php endfor; ?>
			</div>
			<div>
				<?php for ($x = 1; $x <= $buteliuLikutis; $x++) : ?>
					<img src="http://oldwiskyclub.ru/img/p8bbc877689c9a60f4b1d9605853fae52-w100-h200-ti/viski-dzhek-deniels-tennessi-master-distiller.jpg"
						 alt="bottle">
                <?php endfor; ?>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
	</body>
</html>
