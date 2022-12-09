<?php

session_start();

use Src\Core\Core;

require_once('../Src/vendor/autoload.php');

require_once('../config/environment.php');
require_once('../config/config.php');

$core = new Core();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Title -->
    <title>Forno Mágico</title>

    <!-- Meta TAGs -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Imports -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/reset.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/animations.css">

    <!-- Components -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/components/main-button.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/components/main-search.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/components/main-title.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/components/main-icon.css">

    <!-- Pages -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/home/index.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/home/featured.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/home/recents.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/home/about.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/header.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/footer.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/style.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?= DIR_FNT ?>/fonts.css">

</head>
<body>
    <div id="container">

        <?php $core->run() ?>

    </div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/sticky.min.js" integrity="sha512-O5YCLUxCY2OBc4rfpnKUIgE4LGuCiW8CrJ7ty4hvkBAAKUOnlbomEFWd3a6ruRnFvO3LG2wiaGiJ1heOvdppvA==" crossorigin="anonymous"></script>

    <script src="<?= DIR_JS ?>/animations.js"></script>

    <script src="<?= DIR_JS ?>/script.js"></script>
</body>
</html>