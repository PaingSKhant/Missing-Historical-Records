<?php 

class Book
{

    public function jsonConnect()
    {
        $json_file = file_get_contents('./data/books.json');

        $data = json_decode($json_file, true);

        return $data;
    }

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

}

$historicalBook = new Book();
