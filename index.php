<?php
    include "config/config.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loogbok v1.0 .:Iniciar Session:.</title>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Mobile app web-->
    <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="app/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="app/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="app/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="app/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="app/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="app/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="app/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="app/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="app/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="app/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="app/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="app/favicon-16x16.png">
<link rel="manifest" href="./manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Bootstrap 3.3.6 -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.1.2/cjs/ionicons.cjs.js">
    <!-- Theme style -->
   <link rel="stylesheet" href="css/login.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

</head>
    <body>
         <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                    <h2 class="text-center">Login logbook</h2>
                    <p class="text-center">Inciar sesion.</p>
                <?php 
                        $invalid=sha1(md5("contrasena y email invalido"));
                        if (isset($_GET['invalid']) && $_GET['invalid']==$invalid) {
                            echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                <strong>Error!</strong> Contraseña o correo Electrónico invalido
                                </div>";
                        }
                        $error=sha1(md5("cuenta inactiva"));
                        if (isset($_GET['error']) && $_GET['error']==$error) {
                            echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                <strong>Error!</strong> Cuenta inactiva!
                                </div>";
                        }
           ?>
            <div class="login-box-body">
                <p class="login-box-msg">Iniciar Sesion</p>
                <form action="action/login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Correo electrónico">
                     
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Recordar mi contraseña
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="form-control button sn">Iniciar Sesion</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <a class="link forget-pass text-left" href="#">Se te olvido la contraseña?</a><br>
                <a href="register.php" class="text-center">Registrarme</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>
    </body>
</html>
