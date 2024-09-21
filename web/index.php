<?php
include_once '../lib/helpers.php';

include_once '../view/partials/header.php';

echo "<body>";
    echo "<div class='container'>";
        include_once '../view/partials/navbar.php';

        if(isset($_GET['modulo'])){
            resolve();
        }
        if(!isset($_SESSION['auth']) || $_SESSION['auth']!="ok"){
            redirect("login.php");
        }

    echo "</div>";
    include_once '../view/partials/footer.php';

echo "</body>";
echo "</html>";

?>