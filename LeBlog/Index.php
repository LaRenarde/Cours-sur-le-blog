<?php
require_once 'functions.php';
require_once 'config_bdb.php';
include 'header.php';
?>

<main>
    <h2> Les articles publiées récemments</h2>

    <section class ="articlesRecents">
        <?php
        foreach ($articlesRecents as $articleRecent) :
        ?>

            <article> <!-- dsl un peu de css ici, ça rend le code un peu lourd mais je n'avais pas trop le choix, car j'ai
                        voulu récupérer des images de la bdd pour en faire un background -->

                <a href="Article.php?id=<?= $articleRecent->id ?>" title="">
                    <div class="imageArticleRecent" style="background-image:url(image/<?= $articleRecent ->Img ?>); margin-bottom : 10px;"><h3><?= $articleRecent ->Nom ?> </h3></div>
                    <h3 style="display: inline; padding: 20px 0px 20px 20px ; font-size: 2rem;"><?= $articleRecent->Titre ?> </h3>
                    <p class="date" style="display: inline;"> <?= $articleRecent ->Date_de_creation ?> </p>
                    <p class="contenu"><?= substr($articleRecent ->Texte,0,250) ?></p>
                </a>
                <div class="lien"><a href="Article.php?id=<?= $articleRecent->id ?>" >Lire L'article</a></div>
                 <!-- J'ai envoyé l'id de l'article via le lien qui envoi vers la page de l'article -->

            </article>

        <?php
        endforeach;
        ?>

    </section>

    <div class="marge"></div>

    <h2> Tous les articles</h2>


    <section class="fileArticles">

        <?php
        foreach ($articles as $article) :
        ?>
            <article>
                    <div class="imageArticle"style="background-image:url(image/<?= $article ->illustration ?>)"> <h3><?= $article ->Nom ?> </h3></div>
                    <div class="textArticle">
                        <h3 style="display: inline; padding: 20px 0px 20px 20px ; font-size: 2rem;"><?= $article->Titre ?> </h3>
                        <p class="date" style="display: inline;"> <?= $article ->Date_de_creation ?> <p>
                        <p class="contenu"><?= substr($article ->Texte,0,300) ?></p>

                    </div>
                    <div class="lien"><a href="Article.php?id=<?= $article->id ?>" >Lire L'article</a></div>

            </article>
            <br/>

        <?php
        endforeach;
        ?>

    </section>
</main>

<?php include 'footer.php'; ?>
