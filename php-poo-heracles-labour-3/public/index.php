<?php

require '../vendor/autoload.php';

/** ✅ DEBUT DE LA ZONE À MODIFIER ✅ **/

use App\Shield;
use App\Weapon;
use App\Hero;
use App\Monster;
use App\Arena;


$heracles = new Hero('Heracles', 20, 6, 'heracles.svg', 2, 2);
$bird1 = new Monster('Bird', 25, 12, 'bird.svg', 2, 5);
$bird2 = new Monster('Bird', 25, 12, 'bird.svg', 9, 9);
$bird3 = new Monster('Bird', 25, 12, 'bird.svg', 1, 3);

$monsters = array($bird1, $bird2, $bird3);

$sword = new Weapon(10, 0.5, 'sword.svg');
$bow = new Weapon(8, 5, 'bow.svg');
$heracles->setWeapon($sword);
$heracles->setWeapon($bow);

$shield = new Shield();
$heracles->setShield($shield);

$arena = new Arena($heracles, $monsters);


/** FIN DE LA ZONE A MODIFIER **/
/** ⛔ Ne pas modifier en dessous ⛔ **/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heracles Labours</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Heracles vs Stymphalian Birds</h1>
    </header>
    <main>
        <div class="fighters">
            <a href="#hero">
                <figure class="heracles">
                    <img src="<?= $heracles->getImage() ?>" alt="heracles">
                    <figcaption><?= $heracles->getName() ?></figcaption>
                </figure>
            </a>
        </div>

        <?php include 'map.php' ?>

    </main>

    <?php include 'inventory.php' ?>
</body>

</html>