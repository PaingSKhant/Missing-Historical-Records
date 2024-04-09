<!-- card list component  -->
<div class="flex flex-wrap justify-around mt-4">

<?php foreach ($currentData as $book) : ?>

    <div class="  mt-4 m-5  p-4 ">

        <a href="">
            <img class="h-96 rounded-xl" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/history-book-cover-design-template-0e3961aae83cdeab2d3b120dd2d7063c_screen.jpg?ts=1692216756" alt="recipeimage">

            <div class="mt-3  font-mono w-64">

                <p class="text-black mt-4"><?php echo $book['BookTitle'] ?></p>

            </div>

        </a>
    </div>

<?php endforeach; ?>

</div>