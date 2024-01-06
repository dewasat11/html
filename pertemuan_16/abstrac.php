<?php

//program perpus
class Perpustakaan {

    //property
    private $idbuku;
    private $author;
    private $buku;
    private $jml;

    //method
    function __construct($idbuku, $author, $buku, $jml){
        $this->idbuku = $idbuku;
        $this->author = $author;
        $this->buku = $buku;
        $this->jml = $jml;
    }
    
    //meethode set author
    function  setauthor($author){
        $this->author = $author;
    }

     //meethode get author
     function  getauthor($author){
        $this->author = $author;
        return
    }

     //meethode set author
     function  setjmlbuku($jml){
        $this->author = $author;
    }

     //meethode set author
     function  getjmlbuku($jml){
        $this->author = $author;
    }
}