<?php 

class Book
{

    public function jsonConnect()
    {
        $json = file_get_contents('./data/books.json');

        $data = json_decode($json, true);

        return $data;
    }

    public function dd($data)
    {
        $dd = die(var_dump($data));

        return $dd;
    }

}

$historicalBook = new Book();
