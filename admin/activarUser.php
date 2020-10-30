<?php 
    include("conexion.php");

    if(isset($_GET['e'])  && isset($_REQUEST['a'])){
        $emailActivacion = $_REQUEST['e'];
        $hash = $_REQUEST['a'];

        $resultActivacion = $conn->query("SELECT * FROM usuario WHERE email='$emailActivacion' and hash='$hash'");
        $datoUserActivacion = $resultActivacion->fetch(PDO::FETCH_OBJ);

        if($resultActivacion->rowCount() > 0){
            $id = $datoUserActivacion->id;
            $sqlActivarUsuario = $conn->exec("UPDATE usuario set activacion = 1 WHERE id = '$id'");

            echo "<h1>Su cuenta ha sido activada</h1>";
        }else{
            echo "Activacion fallida";
        }

    }


?>