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
		<div class="container pt-5">
			<form method="get">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1"
						   aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
						else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group">
					<label for="exampleInputAddress">Address</label>
					<input type="text" name="address" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group">
					<label for="exampleInputCountry">Country</label>
					<input type="text" name="country" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="container mb-5">
			<table class="m-auto">
                <?php foreach ($new_array as $value): ?>
					<tr class="border border-dark">
						<td class="border border-dark p-3"><?php print $value . ' '; ?></td>
					</tr>
                <?php endforeach; ?>
			</table>
		</div>
		<div class="container  mb-5">
			<table class="m-auto text-center">
				<tr class="border border-dark">
                    <?php
                    foreach ($name as $key => $item) {
                        if ($item > 10) {
                            print '<td class="border border-dark bg-danger p-3 w-25">' . $key . '</td>';
                        } elseif ($item < 10) {
                            print '<td class="border border-dark bg-primary p-3 w-25">' . $key . '</td>';
                        } elseif ($item == 10) {
                            print '<td class="border border-dark bg-warning p-3 w-25">' . $key . '</td>';
                        }
                    };
                    ?>
				</tr>
			</table>
		</div>


		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
	</body>
</html>
