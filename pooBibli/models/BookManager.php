<?php
include_once "Book.Class.php";
include_once "ModelClass.php";
class BookManager extends Model{
    private $bookList;

    public function addBooks($book){
        $this->bookList[] = $book;
    }
    /**
     * Get the value of bookList
     */ 
    public function getBookList()
    {
        return $this->bookList;
    }
    public function loadingBooks(){
        $sql ="SELECT * FROM livres";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $books = $req->fetchALL(PDO::FETCH_OBJ);
        foreach($books as $book){
            $eachBook = new Book($book->idLivre, $book->nom, $book->nbPages, $book->image);
            $this->addBooks($eachBook);
        }
    }
    public function getBookById($id){
        foreach($this->bookList as $book){
            if ( $book->getIdBook() == $id){
                return $book;
            }
        }
    }
} 