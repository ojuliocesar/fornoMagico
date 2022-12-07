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
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/reset.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/header/header.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/views/home/index.css">

    <link rel="stylesheet" href="<?= DIR_CSS ?>/style.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?= DIR_FNT ?>/fonts.css">

</head>
<body>
    <div id="container">

        <?php $core->run() ?>

    </div>
</body>
</html>