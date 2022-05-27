<?php
include_once('php/Carriers.php');

$carries = new Carriers();
?>

<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repülési statisztikák - Légitársaság</title>
    <link rel="stylesheet" href="css/alap.css">
    <link rel="stylesheet" href="css/legitarsasg.css">
</head>
<body>
    <div id="cim">
        <h1>Légitársaság</h1>
    </div>
    <main>
            <?php
            foreach ($carries->getName(intval($_GET['cid'])) as $key=>$name)
            {?>
        <div>
            <a href="index.html">Főoldal</a> > <a href="legi_listaja.php">Légitársaságok Listája</a> > <a href="#"><?= $name['name'] ?></a>
        </div>
        <h1>
                <?= $name['name'] ?>
            <?php
            }
            ?>
        </h1>
        <div id="kep">
        <?php
        foreach ($carries->getImgId(intval($_GET['cid'])) as $key=>$item)
        {
        ?>
            <img src="kep/logok/<?= $item['id'].'.png' ?>" alt="<?= $item['name'] ?>">
        <?php
        }
        ?>
        </div>
        <div id="adatok">
            <?php
            foreach ($carries->osszesjarat(intval($_GET['cid'])) as $key=>$item)
            {
            ?>
            <h4>Az összes járat:</h4>
            <p class="adat"><?= $item['osszesjarat'] ?></p>
            <?php
            }
            foreach ($carries->jaratokszama(intval($_GET['cid'])) as $key=>$item)
            {
            ?>
            <h4>A látogatott repterek száma:</h4>
            <p class="adat"><?= $item['db'] ?></p>
            <?php
            }
            foreach ($carries->toroltjaratokaranya(intval($_GET['cid'])) as $key=>$item)
            {
            ?>
            <h4>A törölt járatok aránya:</h4>
            <p class="adat"><?= $item['torolt_jaratok_aranya'] ?>%</p>
            <?php
            }
            foreach ($carries->getDelay(intval($_GET['cid'])) as $key=>$item)
            {
            ?>
            <h4>Az átlagos járat késés:</h4>
            <p class="adat"><?= $item['Delay'] ?></p>
            <?php
            }
            foreach ($carries->getMaxCode(intval($_GET['cid'])) as $key=>$item)
            {
            ?>
            <h4>A legforgalmasabb reptér:</h4>
            <p class="adat"><?= $item['max_code'] ?></p>
            <?php
            }
            ?>
        </div>
    </main>
</body>
</html>