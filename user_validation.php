<?php
    if($_SESSION["loggedIn"] == "yes") { //You have to set that somewhere else just like $logged
    ?>
        <p> You ARE logged in. </p>
    <?php } else { ?>
        <p> You ARE NOT logged in. </p>
    <?php
    }
?>
