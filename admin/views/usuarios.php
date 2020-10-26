<?php 
  include("../verificarSesion.php");
  include("../consultarUsuario.php");
  include("../listarUsuarios.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled CSS -->
    <link rel="stylesheet" href="/Sistema/CSS/materialize/css/materialize.css">
    <link rel="stylesheet" href="/Sistema/CSS/panelStyle.css">

    <title>Lista de Usuarios</title>
</head>
<body>
        
    <!-- BARRA DE NAVEGACION-->
    <header>
      <nav class="">
        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
          <a class="brand-logo left" id="top-title">Listado de Usuarios</a>
        </div>
      </nav>
    </header>
    <!-- /. -->

    <!--  SIDE NAV-->
    <ul id="slide-out" class="sidenav sidenav-fixed">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="/Sistema/Imagenes/3.jpg" class="fondo-perfil"> 
          </div>
          <a><img class="circle" src="/Sistema/Imagenes/usuarios/<?php echo $row['foto'];?>"></a>
          <a><span class="white-text name" id="name"><?php echo $row['nombre']. " ".$row['apellido']?></span></a>
          <a><span class="white-text email" id="email"><?php echo $row['correo']?></span></a>
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
    
  <!-- Contenido principal-->
  <main class="contenido">

    <div class="container">
      <table class="highlight responsive-table centered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
          </tr>
        </thead>
          
        <tbody>
          <?php foreach ($usuarios as $row ){ ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['correo']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    
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
                Desarrollo de Software VII
                <a class="grey-text text-lighten-4 right">Semestre del 2020</a>
            </div>
        </div>
  </footer>
  <!-- Compiled and minified JavaScript -->
  <script src="/Sistema/CSS/materialize/js/materialize.min.js"></script>

  <script>

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, {
            coverTrigger:false
        });
    });

</script>


</body>
</html>