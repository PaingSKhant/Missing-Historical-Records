<?php

require_once "./controller/controller.php";

 $bookData = $historicalBook->jsonConnect(); 

$bookId = $_GET['id'];



// die(var_dump($bookId));

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
            <div class="mt-8 container mx-auto flex justify-center ">
               <a href="index.php">
               <button class="bg-white hover:bg-gray-300 text-dark shadow-lg font-bold py-2 px-4 rounded">Back</button>
               </a>
            </div>
            <?php foreach($bookData as $book): ?>
            <?php if($book['BookId'] == $bookId): ?>
               


                <div class="w-full mt-2 p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white"><?php echo $book['BookTitle']; ?> </h5>
                    <p class="mt-2 text-base text-gray-500 sm:text-lg dark:text-gray-400"><?php echo $book['BookDescription']; ?></p>
                    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                        
                    </div>
                </div>


          
            <?php endif; ?>
            <?php endforeach; ?>

        </div>

    </div>

</body>

</html>