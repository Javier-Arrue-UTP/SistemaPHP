<?php 
    include("../verificarSesion.php");
    include("../consultarUsuario.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled CSS -->
    <link rel="stylesheet" href="/JavierArrue/CSS/materialize/css/materialize.css">
    <link rel="stylesheet" href="/JavierArrue/CSS/editarPerfilStyle.css">

</head>
<body>
    <!-- BARRA DE NAVEGACION-->
    <header>
      <nav class="">
        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
          <a class="brand-logo left" id="top-title">Editar Perfil</a>
        </div>
      </nav>
    </header>
    <!-- /. -->

    <!--  SIDE NAV-->
    <ul id="slide-out" class="sidenav sidenav-fixed">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="/JavierArrue/Imagenes/3.jpg" class="fondo-perfil"> 
          </div>
          <a><img class="circle"  src="/JavierArrue/Imagenes/usuarios/<?php echo $row['foto'];?>"></a>
          <a><span class="white-text name" id="name"><?php echo $row['nombre']. " ".$row['apellido']?></span></a>
          <a><span class="white-text email" id="email"><?php echo $row['correo'];?></span></a>
        </div>
      </li>
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons">account_circle</i>Cuenta<i class="material-icons right">arrow_drop_down</i></a>
        </li>
      </ul>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="panel.php"><i class="material-icons">dashboard</i>Principal</a></li>
      <li><a class="waves-effect" href="#!"><i class="material-icons">settings</i>Configuracion</a></li>
    </ul>

    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="editarPerfil.php"><i class="material-icons">settings</i>Editar Perfil</a></li>
        <li><a href="../cerrarSesion.php"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
    </ul>
    <!-- /. -->

    <!-- CONTENIDO PRINCIPAL-->
    <main>
        <div class="container">
            <div class="row center">
                <div class="col s12">
                    <div>
                        <img class="circle hoverable"  src="/JavierArrue/Imagenes/usuarios/<?php echo $row['foto'];?>" id="foto-usuario">
                        <!-- Modal Trigger -->
                        <a class="btn-floating btn waves-effect waves-light modal-trigger hoverable" id="editar-btn" data-target="modal1"><i class="material-icons">edit</i></a>
                    </div>
                </div>              
            </div>

            <div class="row center">
                <div class="col s12">
                    <h5><?php echo $row['nombre']. " ".$row['apellido']?></h5>     
                    <h6><?php echo $row['correo']?></h6>                    
                </div>  
            </div>

            <div class="row" id="formulario">
                <form class="center-align" method="POST" action="../actualizar.php" id="form" enctype="multipart/form-data">
                    <input type="hidden" name="guardado" value="datos">
                    <div class="row">
                        <div class="input-field col m6 s12 ">
                            <label for="first_name">Nombre</label>
                            <input placeholder="Primer nombre" value="<?php echo $row['nombre'];?>" id="first_name" type="text" class="validate center" name="nombre" required>
                        </div>
                        <div class="input-field col m6 s12 ">
                            <label for="last_name">Apellido</label>
                            <input placeholder="Apellido" value="<?php echo $row['apellido']?>" id="last_name" type="text" class="validate center" name="apellido" required> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col m12 s12">
                            <label for="email">Email</label>
                            <input id="email" value="<?php echo $row['correo']?>" placeholder="example@gmail.com" type="email" class="validate" name="email" required>
                            <div>
                                <?php
                                if(!empty($_GET['mensaje'])){
                                    echo "<b class='red-text'>".$_GET['mensaje']."</b>";
                                }?>
                            </div>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action" id="btn-guardar">Guardar Cambios
                    </button>
                </form>
            </div>

            

        </div>

        <!-- ESTRUCUTRA DEL MODAL -->
        <form action="../actualizar.php" method="POST"enctype="multipart/form-data">
            <input type="hidden" name="guardado" value="imagen">
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Cambiar imagen</h4>
                    <div class="input-field col m6 s12">
                        <div class="file-field input-field">
                            <div class="btn" id="btn-foto">
                                <span>Seleccionar</span>
                                <input type="file" accept="image/jpeg,image/png" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Foto de perfil" required>
                            </div>
                        </div>
                        <div>
                            <?php
                                if(!empty($_GET['mensajeFoto'])){
                                echo "<b class='red-text'>".$_GET['mensajeFoto']."</b>";
                            }?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="btn waves-effect waves-light modal-close" id="cerrar-modal">Cancelar</a>
                    <button class="btn waves-effect waves-light" type="submit" name="action" id="guardar-modal">Guardar Cambios
                    </button>
                </div>
            </div>
        </form>

    </main>
    <!-- /. -->
    
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Estudiante: Javier Arrue</h5>
                    <h6 class="white-text">Cedula: 8-941-1079</h6>
                    <h6 class="white-text">Grupo: 1LS-132</h6>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Desarrollo de Software VII II 
                <a class="grey-text text-lighten-4 right">Semestre del 2020</a>
            </div>
        </div>
  </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="/JavierArrue/CSS/materialize/js/materialize.min.js"></script>
    <script src="/JavierArrue/JS/editarPerfil.js"></script>

    <?php 
        if(isset($_GET['exito'])){
    ?>
    
    <script>
        var mensaje = " <?php echo $_GET['exito'];?> ";

        mensajeToast(mensaje);

    </script>

    <?php
        }
    ?>


</body>
</html>