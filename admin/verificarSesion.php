<?php
    session_start();

    //Verificar que la sesion existe.
    if(!isset($_SESSION['sw'])){
        header("Location: /JavierArrue");
    }



?>