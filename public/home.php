<?php
require_once(__DIR__ ."/../classes/header.php");
require_once (__DIR__ ."/../classes/navbar.php");
require_once (__DIR__ ."/../classes/footer.php");
?>
<!DOCTYPE html>
<html>

<head>
    <?= new header() ?>
    <link
        href="./../assets/entries/home/style.css"
        rel="stylesheet" 
    >
    <meta charset="utf-8">
    <title>Centerline</title>
</head>

<body class="bg-light">
    <?= new navbar() ?>
    <main class="d-flex flex-column">
        <section class="home-section tan-bg1 w-100 d-flex flex-column flex-sm-row p-3">
            <div class="col col-lg-4 d-flex flex-column gap-3 align-items-center mt-10p">
                <h2 class="rubik-title w-50">Residential Construction</h2>
                <p class="p-0 w-50">Framing, Fencing, etc.</p>
            </div>
            <svg class="home-svg col col-lg-8"><?= require_once(__DIR__ . "/../assets/img/isometric_house2.svg") ?></svg>
        </section>
        <section class="home-section blue-bg1 w-100 d-flex flex-column flex-sm-row p-3">
            <svg class="home-svg col col-lg-8"><?= require_once(__DIR__ . "/../assets/img/isometric_equipment.svg") ?></svg>
            <div class="col col-lg-4 d-flex flex-column gap-3 align-items-center mt-10p">
                <h2 class="rubik-title w-50">Tuff sum'bitch</h2>
                <p class="p-0 w-50">Kicks arse. Chews bubble gum.</p>
            </div>
        </section>
    </main>
    <?= new footer() ?>
</body>

</html>