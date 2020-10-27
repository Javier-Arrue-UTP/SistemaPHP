<?php 
  include("../verificarSesion.php");
  include("../consultarUsuario.php");
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
    <link rel="stylesheet" href="/JavierArrue/CSS/materialize/css/materialize.css">
    <link rel="stylesheet" href="/JavierArrue/CSS/panelStyle.css">

    <title>Panel Administrador</title>
</head>
<body>
    
    <!-- BARRA DE NAVEGACION-->
    <header>
      <nav class="">
        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
          <a class="brand-logo left" id="top-title">Panel administrativo</a>
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
          <a><img class="circle" src="/JavierArrue/Imagenes/usuarios/<?php echo $row['foto'];?>"></a>
          <a><span class="white-text name" id="name"><?php echo $row['nombre']. " ".$row['apellido']?></span></a>
          <a><span class="white-text email" id="email"><?php echo $row['correo']?></span></a>
        </div>
      </li>
      <li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons">account_circle</i>Cuenta<i class="material-icons right">arrow_drop_down</i></a>
          </li>
        </ul>
      </li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="#!"><i class="material-icons">dashboard</i>Principal</a></li>
      <li><a class="waves-effect" href="#!"><i class="material-icons">settings</i>Configuracion</a></li>
    </ul>

    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="editarPerfil.php"><i class="material-icons">settings</i>Editar Perfil</a></li>
        <li><a href="../cerrarSesion.php"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
    </ul>
    <!-- /. -->

    <!-- CONTENIDO PRINCIPAL-->
    <main class="contenido">
      <div class="row">
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-content black-text" id="contenido-carta">
                <a href="usuarios.php" class="card-title center"> 
                <span class="material-icons" id="usuarios-icon">
                  supervisor_account
                </span>
                <br>
                <span id="usuarios-titulo">
                    Ver lista de usuarios
                </span>
                </a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-content black-text">
                <a href="#!" class="card-title center black-text"> 
                  <span class="material-icons">
                    build
                  </span>
                  <br>
                  <span>
                    En construcción
                  </span>
                </a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-content">
              <a href="#!" class="card-title center black-text"> 
                <span class="material-icons">
                  build
                </span>
                <br>
                <span>
                  En construcción
                </span>
              </a>
            </div>
          </div>
        </div>
    </div>

      <div class="row">
      <div class="col s12">
      <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>

      </div>

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
  <script src="/JavierArrue/CSS/materialize/js/materialize.min.js"></script>



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

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });


  </script>

</body>
</html>