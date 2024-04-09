
<!-- pagination link component  -->
<div class="flex justify-center">

<?php
for ($i = 1; $i <= $totalPages; $i++) {

    echo "<div><h1> <a style='color:black; margin:5px ; font-size:18px; font-style: normal;' href='?page=$i'>$i</a></h1></div>";
}
?>


</div>