<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/materialize/css/materialize.css">

    <link rel="stylesheet" href="CSS/indexStyle.css">
    
</head>
<body class="red darken-4">
    
    <div class="row " style="margin-top: 5%; margin-bottom:2%">
        <div class="col s4"></div>
        <div class="col s4">

            <div class="card grey lighten-5">
                <div class="card-content black-text">
                  <span class="card-title center-align">Inicia Sesión</span>
                  <?php if(isset($_REQUEST['exito'])){?>
                  <h6 class="white-text center-align green lighten-2" style="padding:10px;"><?php echo $_GET['exito']?></h6>
                  <?php } ?>
                  
                  <h6 class="red-text center-align"><?php if(isset($_REQUEST['msg'])) echo $_GET['msg']?></h6>

                  <form action="admin/procesarLogin.php" method="POST">

                    <label for="email">Email</label>
                    <input placeholder="example@gmail.com" id="email" type="email" class="validate" name="email" required>
        
                    <label for="pass">Contraseña</label>
                    <input placeholder="*******" id="pass" type="password" class="validate" name="password1" required>
                    <br>
                    <br>
                    <label>
                        <input type="checkbox" class="filled-in"/>
                        <span>Recordarme</span>
                    </label>

                    <div class="center-align" style="margin-top:10px;">
                        <button class="btn waves-effect waves-light" type="submit" name="action" id="btnLogin">Iniciar sesion
                        </button>
                        <br>
                        <br>¿No tienes una cuenta? <a href="register.php"> ¡Registrate aqui!</a> 
                    </div>

                  </form>

                </div>
            </div>
              
        </div>
        <div class="col s4"></div>

    </div>

    <footer class="page-footer red darken-4">
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

</body>
</html>