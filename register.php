<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/materialize/css/materialize.css">

    <link rel="stylesheet" href="CSS/registerStyle.css">
    <script defer src="JS/registro.js"></script>

</head>
<body>

  <div class="row" id="contenido">

    <div class="col s3 red darken-4 white-text" id="columna1">
      <!-- Contenido lateral-->

      <div class="center-align" style="margin-top: 45%;">

        <div class="section"><h5 class="flow-text">¿Ya estas registrado?</h5></div>
        <div class="section"><h5 class="flow-text">¡Inicia Sesión!</h5></div>

        <a href="index.php" class="waves-effect waves-light btn" id="btnLogin">Inicar sesion</a>

      </div>
      
    </div>

    <div class="col s9 grey lighten-5" id="columna2">
      <!-- Contenido Central-->

        <form class="center-align" method="POST" action="admin/procesarRegistro.php" id="form">
          <h4>Registro de Usuario</h4>
          <div class="row">
            <div class="input-field col m6 s12">
              <label for="first_name">Nombre</label>
              <input placeholder="Primer nombre" id="first_name" type="text" class="validate" name="nombre" required>
            </div>
            <div class="input-field col m6 s12">
              <label for="last_name">Apellido</label>
              <input placeholder="Apellido" id="last_name" type="text" class="validate" name="apellido" required>
            </div>
          </div>

          <div class="row">
            <div class="input-field col m12 s12">
              <label for="email">Email</label>
              <input id="email" placeholder="example@gmail.com" type="email" class="validate" name="email" required>
              <div>
                <?php
                if(!empty($_GET['mensaje'])){
                  echo "<span class='red-text'>".$_GET['mensaje']."</span>";
                }?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col m6 s12">
              <label for="password1">Contraseña</label>
              <input id="password1" placeholder="********" type="password" class="validate" name="password1" required>
            </div>
            <div class="input-field col m6 s12">
              <label for="password2">Validar Contraseña</label>
              <input id="password2" placeholder="********" type="password" name="password2" required>
              <div id="error"></div>
            </div>
          </div>

          <button class="btn waves-effect waves-light" type="submit" name="action" id="btnRegister">registrarse
          </button>

        </form>
    <!--.-->
    </div>
    
  </div>
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
  <script src="CSS/materialize/js/materialize.js"></script>
</body>
</html>
