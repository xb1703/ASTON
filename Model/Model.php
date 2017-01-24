<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

abstract class Model {

  // Objet PDO d'accès à la BD
  private $db;

  // Exécute une requête SQL éventuellement paramétrée
  protected function execQuery($sql, $params = null) {
    $array = array();
    if ($params == null) {
      $resultat = $this->getDB()->query($sql);    // exécution directe
    }
    else {
      $resultat = $this->getDB()->prepare($sql);  // requête préparée
      $resultat->execute($params);
    }

    if($resultat->rowCount() > 1) {
      while($row = $resultat->fetch())
      {
          array_push($array,$row);
      }
    }
    else {
      $row = $resultat->fetch();
        array_push($array,$row);
    }

    return $array;
  }

  protected function insertQuery($sql, $post) {

    foreach($post as $key=>$val) {
      $sql.='"'.$val.'",';
    }
    $sql = substr($sql,0,-1);
    $sql.=')';
    $resultat = $this->getDB()->query($sql);
    return $resultat;

  }

  protected function simpleQuery($sql) {
    $resultat = $this->getDB()->query($sql);
    return $resultat;

  }

  // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
  private function getDB() {
    if ($this->db == null) {
      // Création de la connexion
      $this->db = new PDO('mysql:host=localhost;dbname=tpmvc;charset=utf8',
        'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    return $this->db;
  }

}
?>
