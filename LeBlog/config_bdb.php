<?php
      // Je prépare tous mes articles pour la page d'accueil
      $conn = new PDO("mysql:host=localhost;dbname=monblog;charset=utf8;port=3306","root","");
      $req = $conn ->prepare("SELECT * FROM articles Join categories ON articles.Code_categorie = categories.Code_categorie ORDER BY id DESC "); // Je n'ai pas réussi à utiliser le NOT IN pour exclure les trois articles les plus récents !
      $req->execute();
      $articles = $req->fetchALL(PDO::FETCH_OBJ);

      // Je sélectionne uniquement trois articles récents car CSS différent sur le site web.
      $req2 = $conn ->prepare("SELECT * FROM articles Join categories ON articles.Code_categorie = categories.Code_categorie ORDER BY id DESC LIMIT 3");
      $req2->execute();
      $articlesRecents = $req2->fetchALL(PDO::FETCH_OBJ);

      // Je récupère ma table catégorie que j'utilise pour créer mon menu.
      $req3 = $conn ->prepare("SELECT * FROM categories");
      $req3->execute();
      $categories = $req3->fetchALL(PDO::FETCH_OBJ);
