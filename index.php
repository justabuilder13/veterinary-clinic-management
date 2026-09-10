<?php

require_once "classes/Animal.php";
require_once "classes/Pet.php";
require_once "classes/Owner.php";

$owner1 = new Owner(
    "Justin Lachapelle",
    "123 rue Gouin, Saint-Sulpice",
    "H2X 3K8",
    "514-555-1234",
    "justin@email.com"
);

$pet1 = new Pet("Ficelle", "2012-09-10");


$owner2 = new Owner(
    "Tintin Dupont",
    "456 rue Labrador, Montréal",
    "H3A 1B2",
    "514-555-5678",
    "tintin@email.com"
);

$pet2 = new Pet("Milo", "2023-02-10");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinique Vétérinaire Lachapelle | Lachapelle, Inc.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav>
        <a href="index.php" class="site-name">
            Clinique vétérinaire Lachapelle
        </a>
        <label for="menu" class="menu-button">☰</label>
        <input type="checkbox" id="menu">
        <ul class="nav-links">
            <li><a href="index.php">Clients</a></li>
            <li><a href="animaux.php">Animaux</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Clients</h1>
    <div class="cards">
        <section class="owner">

            <h2><?php echo $owner1->name; ?></h2>

            <div class="owner-info">
                <?php echo $owner1->getProp(); ?>
            </div>

            <div class="pet">
                <h3>
                    Animal : <?php echo $pet1->name; ?>
                </h3>

                <div class="pet-info">
                    <?php echo $pet1->getProp(); ?>
                </div>
                <img src="img/ficelleChat.jpg" alt="Photo de Ficelle" class="pet-image">
            </div>
        </section>

        <section class="owner">
            <h2><?php echo $owner2->name; ?></h2>

            <div class="owner-info">
                <?php echo $owner2->getProp(); ?>
            </div>
            <div class="pet">
                <h3>
                    Animal : <?php echo $pet2->name; ?>
                </h3>
                <div class="pet-info">
                    <?php echo $pet2->getProp(); ?>
                </div>
                <img src="img/miloChien.jpg" alt="Photo de Milo" class="pet-image">
            </div>
        </section>
    </div>
</main>

<footer>
    <p>© <?= date('Y') ?> Clinique Vétérinaire Lachapelle | Tous droits réservés</p>
</footer>

</body>
</html>
