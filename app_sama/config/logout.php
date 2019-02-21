<?php
session_start();
    if($_SESSION['isLogged']){
        session_destroy();
        header("Location: ../index");
    }

?>