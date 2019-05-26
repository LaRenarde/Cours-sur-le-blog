<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>La valise à surprise</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/kti5rcp.css">

<?php
require_once 'functions.php';
require_once 'config_bdb.php';
?>

    </head>


    <body>
        <header>
            <div id="logo"><a href="Index.php" title="retour page accueil"><img src="image/L.png" alt="un logo fleurs et valise"/></a></div>
            <h1> La valise à surprise</h1>
            <div class="marge"></div>
            <nav>
                <ul>
                    <?php
                    foreach($categories as $categorie) : ?>
                    <li><a href="Categorie.php?id=<?= $categorie->Code_categorie ?>" title=""><?= $categorie->Nom ?></a></li>
                    <?php endforeach ?>
                </ul>
            </nav>
            <br/>
            <hr/>
        </header>
