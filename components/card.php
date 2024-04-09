<!-- card list component  -->
<div class="flex flex-wrap justify-around mt-4">

<?php foreach ($currentData as $book) : ?>

    <div class=" mt-4 m-5  p-4 ">

        <a href="">
            <img class="w-64 h-96 rounded-xl" src="<?php echo $book['BookCover'] ?>">

            <div class="mt-3  font-mono w-64">

                <p class="text-black mt-4"><?php echo $book['BookTitle'] ?></p>

            </div>

        </a>
    </div>

<?php endforeach; ?>

</div>