<?php
    session_start();
?>
<?php
    session_start();
    //logout
    session_destroy();
    // arahkan ke halaman index.php 
    header("location: index.php");
?>