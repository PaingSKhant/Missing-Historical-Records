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
        <div class="container mx-auto p-4">

           <?php require('components/navbar.php'); ?>
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