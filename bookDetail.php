<?php

require_once "./controller/controller.php";

$bookData = $historicalBook->jsonConnect();

$bookId = $_GET['id'];

$multiJson = $historicalBook->searchJson();
//die(var_dump($multiJson));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Library</title>
    <?php require('./components/link.php') ?>
</head>

<body class="bg-gray-100">

    <div class="font-mono">

        <div class="container mx-auto p-4">

            <?php require('./components/navbar.php'); ?>
            <hr>
            <div class="mt-2  container mx-auto flex justify-center ">
                <a href="index.php">
                    <button class="bg-white hover:bg-gray-300 text-dark shadow-lg font-bold py-2 px-4 rounded">Back</button>
                </a>
            </div>
            <div class="container mx-auto mt-1">

            <?php foreach ($bookData as $book) : ?>
                    <?php if ($book['BookId'] == $bookId) : ?>

                        <div class="w-full p-4 text-center bg-white border border-blue-500 rounded-lg shadow-inner sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class=" text-3xl font-bold text-gray-900 dark:text-white"><?php echo $book['BookTitle']; ?></h5>
                            <p class="mt-2">=========================<i class="fa-solid fa-gem"></i>=========================</p>
                            <p class="text-lg  text-gray-500 sm:text-lg dark:text-gray-400"><?php echo $book['BookDescription']; ?></p>
                            
                        </div>


                    <?php endif; ?>
                <?php endforeach; ?>

                <?php foreach ($multiJson as $multi) : ?>

                    <div class="w-full  text-center bg-white border border-blue-500 rounded-lg shadow-inner sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                       
                        <p class="text-lg text-gray-500 sm:text-lg dark:text-gray-400"><?php echo $multi['Content']; ?></p>
                       
                    </div>

                    
                <?php endforeach; ?>

                <div class="continer flex justify-center"><p class="mt-2">=========================<i class="fa-solid fa-gem"></i>=========================</p></div>

                

            </div>
           
        </div>

    </div>



</body>

</html>