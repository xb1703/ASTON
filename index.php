<?php
require 'config.php';
require 'Controleur/Controleur.php';

try {

  $c = new Controleur();
  if (isset($_GET['action']))
  {
      $url = $_GET['action'];
      //echo $url;
      $segments = explode('/', $url);
      $action = $segments[0];

      if (isset( $segments[1]))
        $id = $segments[1];

     if (method_exists($c, $action))
     {
        if(isset($id))
            $c->$action($id);
        else
            $c->$action();
     }
     else {
       echo 'Cette action est non définie';
     }

  } else {  // aucune action définie : affichage de l'accueil
    $c->liste();
  }
}
catch (Exception $e) {
  echo ($e->getMessage());
}
