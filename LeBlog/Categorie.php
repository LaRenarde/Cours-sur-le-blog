<?php include "header.php";
require_once 'functions.php';
require_once 'config_bdb.php';?>


    <?php
    $id = ($_GET['id']); // id envoyé dans l'url des liens fait sur ma nav dans header.
    $req = $conn->prepare("SELECT * FROM articles JOIN categories ON articles.Code_categorie = categories.Code_categorie WHERE categories.Code_categorie=? ORDER BY id DESC");
    $req->execute([$id]);
    $articles = $req->fetchAll(PDO::FETCH_OBJ); // $articles est remplacé et ne contient que mes articles ayant la bonne catégorie.
    ?>


<!-- Les tables articles et categories étant join, j'appelle l'image de la categorie grâce à illustration et son nom.
H2 est mis en dehors de la boucle j'ai donc fait appel directement à l'array -->
<h2 class="titreCategorie" style="background-image : url(image/<?= $articles[0] ->illustration ?>);"><?= $articles[0] ->Nom ;?></h2>

<main>
    <section class="fileArticles">

        <?php
        foreach ($articles as $article) :
        ?>
            <article>

                    <div class="imageArticle"><h3><?php echo $article->Titre ?></h3></div>
                    <div class="textArticle">
                        <h4><?= $article ->Date_de_creation ?> </h4>
                        <p><?= substr($article-> Texte,0,250) ?></p>
                    </div>
                    <div class="lien"><a href="Article.php?id=<?= $article->id ?>" >Lire L'article</a></div>
                    <!-- J'ai envoyé l'id de l'article via le lien qui envoi vers la page de l'article -->

            </article>
            <br/>

        <?php
        endforeach;
        ?>

    </section>
</main>
<?php include "footer.php";?>


