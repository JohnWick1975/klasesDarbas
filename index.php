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
			<form method="post">
				<lable >Vardas</lable>
				<input class="d-block" type="text" name="name">
				<label>Email</label>
				<input class="d-block mb-3" type="email" name="email">
				<button type="submit">Submit</button>
			</form>
		</div>
		<div class="container">
			<table class="m-auto">
				<tr class="text-center">
					<th>Vardas</th>
					<th>E-mailas</th>
				</tr>
			<?php foreach ($new_array as $value): ?>
				<tr class="border border-dark bg-light p-3">
					<?php foreach ($value as $cont): ?>
					<td class="border border-dark bg-light p-3 w-25 text-center"><?php print $cont ?></td>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>

		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
	</body>
</html>
