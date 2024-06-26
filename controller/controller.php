<?php 

class Book
{
    // json connection method 
    public function jsonConnect()
    {
        $json_file = file_get_contents('./data/books.json');

        $data = json_decode($json_file, true);

        return $data;
    }

    // die var_dump method 
    public function dd($data)
    {
        $dd = die(var_dump($data));

        return $dd;
    }
// pagination method 
    public function pagination()
    {
        $books = $this->jsonConnect();

        $bookPerPage = 4;

        $page = isset($_GET['page']) ? $_GET['page'] :1 ;

        $startIndex = ($page - 1 ) * $bookPerPage;

        $currentPageData = array_slice($books , $startIndex , $bookPerPage);

        return $currentPageData;

    }

    // pagination link 

    public function link()
    {
        $books = $this->jsonConnect();

        $booksPerPage = 4;

        $totalItems = count($books);

        $totalPages = ceil($totalItems /  $booksPerPage);

        return $totalPages;
    }

    public function searchJson()
    {
       $id =  $_GET['id'] ;
        $multiJsonFile = file_get_contents("./data/$id.json");

        $multiJson = json_decode($multiJsonFile, true);

        return $multiJson ;


    }

}

$historicalBook = new Book();
