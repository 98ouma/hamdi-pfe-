<?php
    session_start();
    session_destroy();
    header( "Location:../../Dashbord_Admin/login.php" );
?>