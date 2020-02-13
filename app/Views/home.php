<?php
include_once '../../config.php'
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="/<?php print CONFIG['site_path'] ?>/assets/css/bootstrap-grid.css">
        <link rel="stylesheet" href="/<?php print CONFIG['site_path'] ?>/assets/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="/<?php print CONFIG['site_path'] ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/<?php print CONFIG['site_path'] ?>/assets/css/style.css">
    </head>
    <body class="home-page">
        <div class="home-page container text-center mt-5">
            <h1 class="home-page text-white">START</h1>
        </div>
        <nav class="home-page container text-center">
            <a class="home-page d-inline-block m-3 btn btn-primary border border-danger" href="home.php"><h3>Home</h3></a>
            <a class="home-page d-inline-block m-3 btn btn-primary border border-danger" href="users.php"><h3>Users</h3></a>
        </nav>
        <script type="text/javascript" src="../../assets/js/jquery.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
        <script src="https://kit.fontawesome.com/23c997c174.js" crossorigin="anonymous"></script>
    </body>
</html>
