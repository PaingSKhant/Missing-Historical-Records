<?php

require_once "./controller/controller.php";

// $bookData = $historicalBook->jsonConnect(); 

//call pagination method from controller.php
$currentData = $historicalBook->pagination();

$totalPages = $historicalBook->link();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Library</title>
</head>

<!-- link collection component  -->
<?php require('components/link.php') ?>


<body class="bg-gray-100">
    <div class="font-mono">
        <!-- navigation bar  -->
        <div class="container mx-auto p-4 mt-10  ">

           <div class="flex">
           <img src="./logo/book.jpg" class="w-20 h-20 mb-2 rounded-xl" alt="bookLogo">

           <h1 class="text-2xl font-bold mt-6 ms-2">Book Library</h1>

           </div>
            <hr>

            <!-- book list card  -->
           <?php require('components/card.php'); ?>

            <!-- pagination link  -->
          <?php require('components/pagination.php') ;?>
            <hr>

        </div>

    </div>
</body>


</html>