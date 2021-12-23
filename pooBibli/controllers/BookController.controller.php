<?php
include_once 'models/BookManager.php';

class BookController{
    private $bookManager;

    public function __construct()
    {
        $this->bookManager = new bookManager;
        $this->bookManager->loadingBooks(); 
    }
    public function displayBooks(){
      $bookList =   $this->bookManager->getBookList();
      require 'views/books-view.php';
    }
    public function displayBook($id){
        $book = $this->bookManager->getBookById($id); 
        require 'views/display-book-view.php';
    }
    public function addBook(){
        require "views/add-book-view.php";
    }
}