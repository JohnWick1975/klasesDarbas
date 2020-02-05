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
		<section>
			<h3>Tavo emailas yra <?php print $_POST['email'] ?></h3>
			<h3>Tavo slaptazodis yra <?php print $_POST['password'] ?></h3>
			<h3> Tavo adresas yra <?php print $_POST['address'] ?></h3>
			<h3> Tavo antras adresas yra <?php print $_POST['address2'] ?></h3>
			<h3> Tavo miestas yra <?php print $_POST['city'] ?></h3>
			<h3> Tavo salis yra <?php print $_POST['state'] ?></h3>
			<h3> Tavo zipas yra <?php print $_POST['zip'] ?></h3>

		</section>
		<div class="container mt-5">
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Email</label>
						<input type="email" name="email" class="form-control" id="inputEmail4">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Password</label>
						<input type="password" name="password" class="form-control" id="inputPassword4">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Address 2</label>
					<input type="text" name="address2" class="form-control" id="inputAddress2"
						   placeholder="Apartment, studio, or floor">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">City</label>
						<input type="text" name="city" class="form-control" id="inputCity">
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">State</label>
						<select id="inputState" name="state" class="form-control">
                            <?php
                            foreach ($countryArray as $key => $country) {
                                print "<option value=\"$key\">" . $country['name'] . "</option>>";
                            }
                            ?>
							<option selected>Choose...</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<label for="inputZip">Zip</label>
						<input type="text" name="zip" class="form-control" id="inputZip">
					</div>
				</div>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							Check me out
						</label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
		<div class="container">
			<table class="w-100 text-center bg-light">
				<?php
				foreach (array_keys($usersData[0]) as $userInfo):?>
				<th class='w-25 p-3 border border-dark'><?php print $userInfo?></th>
				<?php endforeach; ?>
				<!--<tr>
					<th class='w-25 p-3 border border-dark'>Name:</th>
					<th class='w-25 p-3 border border-dark'>Age:</th>
					<th class='w-25 p-3 border border-dark'>Address:</th>
					<th class='w-25 p-3 border border-dark'>Url:</th>
				</tr>-->
                <?php
                foreach ($usersData as  $value) {
                    print "
					<tr>
						<td class='w-25 p-3 border border-dark'>" . $value['name'] . "</td>
						<td class='w-25 p-3 border border-dark'>" . $value['age'] . "</td>
						<td class='w-25 p-3 border border-dark'>" . $value['address'] . "</td>
						<td class='w-25 p-3 border border-dark'><img src=" . $value['url'] . "></td>
					</tr>					
					";
                }
                ?>
			</table>
		</div>

		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
	</body>
</html>
