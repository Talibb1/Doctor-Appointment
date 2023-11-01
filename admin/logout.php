<!-- Database Connection -->
<?php include "Connection/config.php" ?>

<?php

    session_destroy();
    unset($_SESSION['userId']);
    unset($_SESSION['userName']);
    unset($_SESSION['userEmail']);
    
    header('location:index.php');

?>