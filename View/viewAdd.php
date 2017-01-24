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
    <h1>Ajouter un livre</h1>
    <p>
      <form method="POST" action="<?php echo URL_APLLI_BOOK; ?>addBook">
        <table class="table">
        <thead class="thead-inverse">
        <tr><td>Nom du livre</td><td><input type="text" name="nom" value=""></td></tr>
        <tr><td>Auteur du livre</td><td><input type="text" name="auteur" value=""></td></tr>
        <tr><td>Résumé du livre</td><td><textarea name="resume" cols="30" rows="5"></textarea></td></tr>
        <tr><td>Prix du livre</td><td><input type="text" name="prix" value=""></td></tr>
        <tr><td>Image du livre</td><td><input type="text" name="image" value=""></td></tr>
        <tr><td></td><td><button type="submit" class="btn btn-primary">Ajouter</button></td></tr>
        </thead>

        </table>
      </form>
    </p>
  </div>
  </body>
</html>
