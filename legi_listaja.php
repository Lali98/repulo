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
    <title>Repülési statisztikák - Légitársaságok Listája</title>
    <link rel="stylesheet" href="css/alap.css">
    <link rel="stylesheet" href="css/legi.css">
<!--    <script src="js/legi.js"></script>-->
</head>
<body>
    <div id="cim">
        <h1>Repülési statisztikák</h1>
    </div>
    <main>
        <div>
            <a href="index.html">Főoldal</a> > <a href="#">Légitársaságok Listája</a>
        </div>
        <ul id="felsor">
            <?php
                foreach ($carries->getCarriers() as $key=>$carrier)
                {?>
                    <li><a href="tars.php?cid=<?= $carrier['id'] ?>"><?= $carrier['name'] ?></a></li>
            <?php
                }
            ?>
        </ul>
    </main>
</body>
</html>