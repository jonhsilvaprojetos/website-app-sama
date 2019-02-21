<?php
session_start();
    if($_SESSION['isLogged']){
        
    }else{
        header("Location: ./index");
    }
?>