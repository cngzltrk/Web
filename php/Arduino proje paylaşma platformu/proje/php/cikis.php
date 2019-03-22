<?php
    // oturumu baslatalim
    session_start();
    // oturumu oldurelim
    session_destroy();
    // ansayfaya gidelim
    header ("Refresh:1;  url=../index.php");
?>