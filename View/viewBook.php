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
    <h1>Modifier le livre "<?php echo $book[0]['nom']; ?>"</h1>
    <p>
      <form method="POST" action="<?php echo URL_APLLI_BOOK; ?>updateBook/<?php echo $book[0]['id']; ?>">
        <table class="table">
        <thead class="thead-inverse">
        <tr><td>Nom du livre</td><td><input type="text" name="nom" value="<?php echo $book[0]['nom']; ?>"></td></tr>
        <tr><td>Auteur du livre</td><td><input type="text" name="auteur" value="<?php echo $book[0]['auteur']; ?>"></td></tr>
        <tr><td>Résumé du livre</td><td><textarea name="resume" cols="30" rows="5"><?php echo $book[0]['resume']; ?></textarea></td></tr>
        <tr><td>Prix du livre</td><td><input type="text" name="prix" value="<?php echo $book[0]['prix']; ?>"></td></tr>
        <tr><td>Image du livre</td><td><input type="text" name="image" value="<?php echo $book[0]['image']; ?>"></td></tr>
        <tr><td></td><td><button type="submit" class="btn btn-primary">Modifier</button></td></tr>
        </thead>

        </table>
      </form>
    </p>
  </div>
  </body>
</html>
