<?php
include_once('php/Carriers.php');

$carries = new Carriers();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alap.css">
    <link rel="stylesheet" href="css/repterek.css">
    <title>Repterek</title>
</head>
<body>
    <div id="cim">
        <h1>Repterek</h1>
    </div>
    <main>
        <div><a href="index.html">Főoldal</a> > <a href="#">Repterek</a></div>

        <h2>3 Legforgalmasabb Reptér</h2>
        <div id="egesz">
            <div class="keret">
                <p class="szo"><img src="kep/cup_gold.jpg" alt="Arany serleg" align="left">- <?= $carries->repterek()[0]['name'] ?></p>
                <p><b>Az összes járat:</b><br>&nbsp;&nbsp;&nbsp; <?= $carries->repterek()[1]['OsszesJarat'] ?><br><br><b>Kód:</b><br>&nbsp;&nbsp;&nbsp; <?= $carries->repterek()[0]['code'] ?><br><br><b>Koordináták:</b><br>&nbsp;&nbsp;&nbsp;33°38'25.5"N&nbsp;84°25'11.5"W</p>
            </div>

            <div class="keret">
                <p class="szo"><img src="kep/cup_silver.jpg" alt="Ezüst serleg" align="left"> -  <?= $carries->repterek()[1]['name'] ?></p>
                <p><b>Az összes járat:</b><br>&nbsp;&nbsp;&nbsp; <?= $carries->repterek()[1]['OsszesJarat'] ?><br><br><b>Kód:</b><br>&nbsp;&nbsp;&nbsp; <?= $carries->repterek()[1]['code'] ?><br><b><br>Koordináták:</b><br>&nbsp;&nbsp;&nbsp;41°58'43.0"N&nbsp;87°54'17.0"W</p>
            </div>

            <div class="keret">
                <p class="szo"><img src="kep/cup_bronze.jpg" alt="Bronz serleg" align="left"> -  <?= $carries->repterek()[2]['name'] ?></p>
                <p><b>Az összes járat:</b><br>&nbsp;&nbsp;&nbsp; <?= $carries->repterek()[2]['OsszesJarat'] ?><br><br><b>Kód:</b><br>&nbsp;&nbsp;&nbsp; <?= $carries->repterek()[2]['code'] ?><br><br><b>Koordináták:</b><br>&nbsp;&nbsp;&nbsp;32°53'49.0"N&nbsp;97°02'17.0"W</p>
            </div>
        </div>
    </main>

</body>
</html>