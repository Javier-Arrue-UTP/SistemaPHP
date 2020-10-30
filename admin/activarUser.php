<?php 
    include("conexion.php");

    //Verificar que haya llegado mediante el link de activacion
    if(isset($_GET['e'])  && isset($_REQUEST['a'])){
        $emailActivacion = $_REQUEST['e'];
        $hash = $_REQUEST['a'];

        $resultActivacion = $conn->prepare("SELECT * FROM usuario WHERE correo=? and hash=?");
        $resultActivacion->execute([$emailActivacion,$hash]);

        if($resultActivacion->rowCount() > 0){
            $row = $resultActivacion->fetch();
            $id = $row['id_usuario'];
            $sqlActivarUsuario = $conn->exec("UPDATE usuario set activacion = 1 WHERE id_usuario = '$id'");

            echo "
            <h1>Su cuenta ha sido activada</h1>
            <br>
            <a href='../index.php'>Iniciar sesión</a>";
        }else{
            echo "Activacion fallida";
        }

    }


?>