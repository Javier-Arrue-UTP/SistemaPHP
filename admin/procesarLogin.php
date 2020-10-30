<?php 
session_start();
include("conexion.php");

//Validar que tenga que pasar por el inicio de sesion
if(isset($_REQUEST['email']) && isset($_REQUEST['password1'])){


    $email = $_REQUEST['email'];
    $pass = md5($_REQUEST['password1']);
    
    //TODO: Hacer cookies.

    //Validacion en la base de datos
    $result = $conn->prepare("SELECT id_usuario FROM usuario WHERE correo=? AND password = ?");
    $result->execute([$email,$pass]);
    
    //Si existe:
    if($result->rowCount()>0){
        //Nueva validacion para ver la activacion de la cuenta.
        $result = $conn->prepare("SELECT id_usuario FROM usuario WHERE correo=? AND password = ? AND activacion = 1");
        $result->execute([$email,$pass]);

        //Si encuentra resultado, la cuenta ha sido activada.
        if($result->rowCount()>0){
            $row = $result->fetch();
            //Creacion de sesion
            $_SESSION['sw'] = true;
            $_SESSION['id'] = $row['id_usuario'];
            header("Location: ../Admin/views/panel.php");
            exit;
            //Si no encuentra resultado, la cuenta no ha sido activada.
        }else{
            header("Location: ../index.php?msg=La cuenta no ha sido activada");
            exit;
        }

        
    }//Si no existe:
    else{

        //Nueva validacion para ver que fue lo que se ingreso mal.
        $nFilas = $conn->query("select*from usuario where correo='$email'")->fetchColumn();

        //Si el correo EXISTE en la base de datos... Contraseña Incorrecta
        if ($nFilas > 0 ){
            header("Location: ../index.php?msg=Contraseña incorrecta, intente nuevamente");
            exit;
        }else{
            //Si no se encuentra el correo.... El usuario no existe
            header("Location: ../index.php?msg=Usuario no encontrado, intente nuevamente");
            exit;
        }
    }
}else{

    echo "Usuario no definido";
    echo '<meta http-equiv="refresh" content="3; url= ../index.php">';

}


?>