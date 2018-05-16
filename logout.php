<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['roletable']);
    session_unset();
    session_destroy();
    header('location:index.html');
?>