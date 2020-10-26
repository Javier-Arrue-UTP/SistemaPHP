<?php
    include("conexion.php");
    $id =  $_SESSION['id'];
    $sql = "SELECT*FROM usuario WHERE id_usuario = ?";
    $result = $conn->prepare($sql);
    $result->execute([$id]);
    //Arreglo asociativo de los datos del usuario.
    $row = $result->fetch();
?>