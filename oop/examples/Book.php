<?php

class Book
{
    //properties 
    protected string $book, $author;
    protected int $pages;

    public function __construct(string $book, string $author, int $pages)
    {
        $this->book   = $book;
        $this->author = $author;
        $this->pages  = $pages;
    }

    public function displayDetails()
    {
        echo "The Book Name : $this->book <br>";
        echo "The Book Author : $this->author <br>";
        echo "The Pages Number : $this->pages <br>";
    }
    public function getBook() : array{
        $array  = [
            'Name' => $this->book ,
            'Author' =>$this->author,
            'Pages' => $this->pages
        ];
        return $array ;
    }
}

class Library
{
    //properties 
    protected $Allbooks = [];

    //methods
    public function addBook(Book $book){
        $this->Allbooks [] = $book->getBook();
    }

 
    public function ShowBooks()
    {
        if(empty($this->Allbooks)){
            echo "No Books In Lib To Display !";
            return;
        }
        echo "All Books In LIbrary :- <br>";
        foreach($this->Allbooks as $index=>$book){
            echo "The Details of Book Number " .  $index+1 . ":- <br>";
            echo "The Name : " . $book['Name'] . "<br>"; 
            echo "The Author : " . $book['Author'] . "<br>"; 
            echo "The Pages Number : " . $book['Pages'] . "<br>"; 
            echo "<hr>";
        }
    }

}

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 180) ;
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 281);
$book3 = new Book("1984", "George Orwell", 328);


$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);



$library->ShowBooks();


