<?php
    include("verificarSesion.php");
    include("consultarUsuario.php");

    $guardado = $_REQUEST['guardado'];


    if($guardado == 'imagen'){

        $tipo = $_FILES['foto']['type'];

        $temp = $_FILES['foto']['tmp_name'];
        

        if($tipo == "image/jpeg" || $tipo == "image/png"){

            $nuevoNombre = $row['id_usuario'].".png";
            move_uploaded_file($temp, 'C:/xampp/htdocs/JavierArrue/Imagenes/usuarios/'.$nuevoNombre);
            $id = $row['id_usuario'];
        
            $queryUpdate = "UPDATE usuario SET foto = ? WHERE id_usuario = ? ";
            $result = $conn->prepare($queryUpdate);
            
            if($result->execute([$nuevoNombre,$id])){
                echo '<meta http-equiv="refresh" content="0; url= views/editarPerfil.php?exito=La imagen ha sido cambiada.">';
            }

        }else{
            header("Location: views/editarPerfil.php?mensajeFoto=Tipo de archivo no soportado");
            exit;
        }
    }else{

        try{
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $correo = $_REQUEST['email'];
    
            $queryUpdate = "UPDATE usuario SET correo = ?,nombre=?,apellido=? WHERE id_usuario =?";
            $result = $conn->prepare($queryUpdate);
            
            
            if($result->execute([$correo,$nombre,$apellido,$id])){
                echo '<meta http-equiv="refresh" content="0; url= views/editarPerfil.php?exito=Datos de la cuenta cambiados.">';
            }
            
        }catch(PDOException $e){
            header('location: views/editarPerfil.php?mensaje=Email no disponible');
            exit;
        }
        


    }




    

?>