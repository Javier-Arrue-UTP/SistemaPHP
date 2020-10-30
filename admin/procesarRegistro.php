<?php 
include("conexion.php");
include("enviarEmail.php");

//Validando que pase por el registro
if(isset($_REQUEST['email']) && isset($_REQUEST['password1'])){

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['email'];
    $pass = md5($_REQUEST['password1']);
    $foto = 'default.jpg';
    $activacion = 0;
    $hash= md5(rand(0,10000));

    try{
        $sql = "INSERT INTO usuario (nombre, apellido, correo, password, foto, activacion, hash) 
        VALUES (?, ?, ?, ?, ?, ?,?)";
        $stmt = $conn->prepare($sql);
        if($stmt->execute([$nombre, $apellido,$correo, $pass, $foto,$activacion,$hash])){
            echo '<meta http-equiv="refresh" content="0; url= ../index.php?exito=Tu cuenta ha sido creada">';
        }
        
    }catch(PDOException $e ){
        if($e->getCode() == 23000){
            header('location: ../register.php?mensaje=Email no disponible');
            exit;
        }
    }
}//Si no ha pasado por el registro....
else{
    echo '<meta http-equiv="refresh" content="0; url= ../index.php">';
}


?>