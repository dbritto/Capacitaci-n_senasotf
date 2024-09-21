<?php
include_once '../lib/helpers.php';

include_once '../view/partials/header.php';

echo "<body>";
    echo "<div class'container'>";
    include_once '../view/partials/navbar.php';

        if(isset($_GET['modulo'])){
            resolve();
        }//else{
   // echo"<a href='".getUrl("Usuario","Usuario","test")."'>";
    //echo"<button>Usuarios</button>";
    //echo"</a>";

   // echo"<article class'container' style='display:flex; align-items:center; justify-content:;'>";
    //echo "<h1>Daniel Britto</h1>";
    //echo"</article>";
//}



    echo "</div>";
    include_once '../view/partials/footer.php';

echo "</body>";
echo "</html>";

?>