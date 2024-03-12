<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

//creating a class and also the object of
class Book {
    public $bookName;
    public $Author;
    public $NumberOfPages;

    //creating a constructor
    //if multiple parameters are used, use null
    // function __construct(){
    //   echo "This is the constructor";
    // }

    //only one constructor can be present one class
    function __construct($bookName=null,$Author=null,$NumberOfPages=null){
        $this->bookName= $bookName;
        $this->Author= $Author;
        $this->NumberOfPages= $NumberOfPages;
    }

    //object function create
    // function CreateBook(){
    //     echo "Hi, Its a nice book";
    // }
    // function CreateBook($Owner,$Idea){
    //     $this->owner=$Owner
    // }
    // function CreateBook(){
    //     echo "Hi, Its a nice book";
    // }

}



$book1=new Book;
$book1 -> bookName = "Hunger games";
$book1 -> Author = "Hunger";
echo $book1->bookName;  

$book2=new Book("Hunter", "Upasana", "500");
echo $book2->bookName;
?>

</body>
</html>



