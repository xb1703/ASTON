<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste de livres</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  <div id="container">
    <h1>Liste des livres en stock</h1>
    <p><a href="<?php echo URL_APLLI_BOOK; ?>add">Ajouter un livre</a></p>
    <p>
      <table class="table">
      <thead class="thead-inverse">
        <tr><th>ID</th><th>Nom</th><th>Auteur</th><th>Résumé</th><th>Prix</th><th>Image</th><th></th><th></th></thead>
        <?php
        foreach($books as $book) {
          echo '<tr><td>'.$book['id'].'</td><td>'.$book['nom'].'</td><td>'.$book['auteur'].'</td><td>'.$book['resume'].'</td><td>'.$book['prix'].'</td><td><img src="images/'.$book['image'].'" style="width:50px;height:50px"></td><td><a href="'.URL_APLLI_BOOK.'update/'.$book['id'].'">Modifier</a></td><td><a href="'.URL_APLLI_BOOK.'delete/'.$book['id'].'">Supprimer</a></td></tr>';
        }
        ?>
      </table>
    </p>
  </div>
  </body>
</html>
