<?php

require 'Model/Book.php';

class Controleur {

  private $book;

  public function __construct() {
    $book = new Book();
    $this->book = $book;
  }

  public function liste()
  {
    $books = $this->book->getBooks();
    require 'View/viewList.php';
  }

  public function add() {
    require 'View/viewAdd.php';
  }

  public function update($id) {
    $b = new Book();
    $book = $this->book->getBook($id);
    require 'View/viewBook.php';
  }

  public function delete($id) {
    $book = $this->book->getBook($id);
    require 'View/viewDelete.php';
  }

  public function addBook() {
    if($this->book->add($_POST))
      echo '<script>alert("Livre ajouté avec succès");location.href="'.URL_APLLI_BOOK.'"</script>';
  }

  public function updateBook($id) {
    /*echo $id;
    print_r($_POST);
    echo $this->book;
    exit;*/
    if($this->book->update($id, $_POST))
      echo '<script>alert("Livre modifié avec succès");location.href="'.URL_APLLI_BOOK.'"</script>';
  }

  public function deleteBook($id) {
    if($this->book->delete($id))
      echo '<script>alert("Livre supprimé avec succès");location.href="'.URL_APLLI_BOOK.'"</script>';
  }

}
?>
