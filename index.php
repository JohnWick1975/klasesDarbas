<?php
include_once 'app/php/php.php';
include_once 'app/conrollers/form.php';
include_once 'app/conrollers/table.php';
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
            <?php forma(); ?>
		</div>
		<div class="container mb-5">
            <?php table($data) ?>
            <?php /*table($data2) */?>
		</div>
		<div class="container mb-5">
			<?php delete_users_form($conn); ?>
		</div>
		<div class="container">
			<?php insert_user_form($conn) ?>
		</div>
		<div class="container">
			<?php edit_user_form($conn); ?>
		</div>
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
	</body>
</html>
