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
<div class="">
    <!-- navigation bar  -->
    <div class="container mx-auto p-4   ">
        <i></i><h1 class="text-2xl font-bold">Book Library</h1>
        <hr>
      
    </div>
    
</div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>