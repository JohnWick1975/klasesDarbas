<?php
//Show all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//check PHP version
if (phpversion() < 7.3){
    die("<pre>Your server is using PHP version " . phpversion() . ".<br/>Please upgrade to PHP v7.3.12 or higher.");
}

/*// check .htaccess file
if (!file_exists('.htaccess')) {
    die("<pre>No <b>.htaccess</b> file found. But it was in the .zip package.");
}

// Autoload all Frame Core classes
spl_autoload_register(function ($class_name) {
    include str_replace("\\", DIRECTORY_SEPARATOR, $class_name) . ".php";
});*/

// Including configuration variables
require_once "config.php";

/*// Let's create an instance of the application
$app = new Frame\App();*/

/*include_once 'app/php/php.php';
include_once 'app/conrollers/form.php';
include_once 'app/conrollers/table.php';*/
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


		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
	</body>
</html>
