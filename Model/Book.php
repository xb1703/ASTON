<?php
require 'Model/Model.php';

class Book extends Model {

  // Renvoie la liste des livres
  public function getBooks() {
    $sql = 'select * FROM books ORDER BY nom';
    $books = $this->execQuery($sql);
    return $books;

  }

  public function getBook($idBook) {
    $sql = 'select * from books where id=?';
    $book = $this->execQuery($sql, array($idBook));
    return $book;

  }

  public function add($data) {

    $sql = 'INSERT INTO books (`nom`, `auteur`, `resume`, `prix`, `image`) VALUES (';
    $book = $this->insertQuery($sql, $data);
    return $book;
  }

  public function update($id, $data) {

    $sql = 'UPDATE books SET `nom`="'.$data['nom'].'", `auteur`="'.$data['auteur'].'", `resume`="'.$data['resume'].'", `prix`="'.$data['prix'].'", `image`="'.$data['image'].'" WHERE id='.$id;
    $book = $this->simpleQuery($sql);
    return $book;
  }

  public function delete($id) {

    $sql = 'DELETE FROM books WHERE id='.$id;
    $book = $this->simpleQuery($sql);
    return $book;
  }


}

?>
