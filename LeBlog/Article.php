<?php
require_once 'functions.php';
require_once 'config_bdb.php';
include 'header.php';

$id = ($_GET['id']); // Je récupère l'id envoyé par l'url.
$req = $conn->prepare("SELECT * FROM articles WHERE id=?");
$req->execute([$id]);
$article = $req->fetchObject(); // mon objet article ne contient que l'article dont j'ai besoin.

?>
      <main>
        <div><h2><?= $article->Titre ?></h2></div>
        <h4><?= $article->Date_de_creation ?> </h4>
        <p><?= $article->Texte ?></p>
      </main>

<?php include 'footer.php'; ?>
