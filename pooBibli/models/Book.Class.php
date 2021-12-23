<?php

Class book{
    private $idBook;
    private $titreBook;
    private $ndpBook;
    private $imageBook;

    public function __construct($idBook,  $titreBook, $ndpBook, $imageBook){
        $this->idBook = $idBook;
        $this->titreBook = $titreBook;
        $this->ndpBook = $ndpBook;
        $this->imageBook = $imageBook;
    }

    /**
     * Get the value of idBook
     */ 
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * Set the value of idBook
     *
     * @return  self
     */ 
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;

        return $this;
    }

    /**
     * Get the value of titreBook
     */ 
    public function getTitreBook()
    {
        return $this->titreBook;
    }

    /**
     * Set the value of titreBook
     *
     * @return  self
     */ 
    public function setTitreBook($titreBook)
    {
        $this->titreBook = $titreBook;

        return $this;
    }

    /**
     * Get the value of ndpBook
     */ 
    public function getNdpBook()
    {
        return $this->ndpBook;
    }

    /**
     * Set the value of ndpBook
     *
     * @return  self
     */ 
    public function setNdpBook($ndpBook)
    {
        $this->ndpBook = $ndpBook;

        return $this;
    }
    
    /**
     * Get the value of imageBook
     */ 
    public function getImageBook()
    {
        return $this->imageBook;
    }

    /**
     * Set the value of imageBook
     *
     * @return  self
     */ 
    public function setImageBook($imageBook)
    {
        $this->imageBook = $imageBook;

        return $this;
    }
}