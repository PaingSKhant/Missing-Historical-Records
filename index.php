<?php

require_once "./controller/controller.php";

$bookData = $historicalBook->jsonConnect();
// echo "<pre/>";
//  $historicalBook->dd($bookData);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Library</title>
</head>

<body>
    <div class="font-mono">
        <!-- navigation bar  -->
        <div class="container mx-auto p-4   ">
            <h1 class="text-2xl font-bold">Book Library</h1>
            <hr>
            <!-- book list card  -->
            <div class="flex flex-wrap justify-around mt-4">

                <?php foreach ($bookData as $book) : ?>

                    <div class="  mt-4 m-5  p-4 ">

                        <img class="h-96 rounded-xl" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/history-book-cover-design-template-0e3961aae83cdeab2d3b120dd2d7063c_screen.jpg?ts=1692216756" alt="recipeimage">

                        <div class="mt-3  font-mono w-64">

                            <p class="text-black mt-4"><?php echo $book['BookTitle'] ?></p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>