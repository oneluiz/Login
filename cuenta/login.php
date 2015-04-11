<?php
require_once('../sistema/configuracion.php');
if (isset($_POST['submit'])) {
    $email         = trim($_POST['accountName']);
    $password      = trim($_POST['password']);
    $sha_pass_hash = sha1(strtoupper($email) . ":" . strtoupper($password));
    $query         = $connect->Connect()->query("SELECT * FROM account WHERE email='" . $email . "' AND password='" . $sha_pass_hash . "' AND activation_code IS NULL");
    $num_rows      = $query->num_rows;
    $row           = mysqli_fetch_array($query);
    
    if ($num_rows == 1) {
        $_SESSION['email']    = $_POST['accountName'];
        $_SESSION['password'] = $_POST['password'];
        
        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['SKey']      = uniqid(mt_rand(), true);
        $_SESSION['IPaddress'] = $_SERVER['REMOTE_ADDR'];
        $time                  = time();
        $fecha                 = date("d-m-Y (H:i:s)", $time);
        $enLinea               = $connect->Connect()->query("UPDATE `account` SET `enLinea`='1',`IP`='" . $_SESSION['IPaddress'] . "',`navegador`='" . $_SESSION['userAgent'] . "',`ultimaActividad`='" . $fecha . "',`llaveDeSesion`='" . $_SESSION['SKey'] . "' WHERE `Id`='" . $row['Id'] . "'");
        header("Location: " . URL_CUENTA . "");
        exit;
    } else {
        echo '<center>Su cuenta no ha sido Activada &oacute; una de sus credenciales es incorrectas</center>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Iniciar Sesi&oacute;n | <?php echo TITULO ?></title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
  <body class="login-body">

    <div class="container">
		<center class="qualtiva-logo">
			<a href="<?php echo URL_CUENTA ?>" title="<?php echo TITULO ?>" alt="<?php echo TITULO ?>">
				<img src="<?php echo URL_CUENTA_IMAGEN ?>qualtiva_logo.png" width="300"></img>
			</a>
		</center>
		<form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">
			<i class="fa fa-users"></i> Iniciar Sesi&oacute;n
		</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input name="accountName" type="text" class="form-control" placeholder="Correo Electronico" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" autofocus required />
                <input name="password"	type="password" class="form-control" placeholder="Contrase&ntilde;a del Usuario" required />
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recu&eacute;rdame
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> &iquest;Has Olvidado Tu Contrase&ntilde;a?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" name="submit" type="submit"><i class="fa fa-sign-in"></i> Iniciar Sesi&oacute;n</button>

            <!--<div class="registration">
                &iquest;No tienes una cuenta todav&iacute;a?
                <a class="" href="registration.html">
                    Crear una cuenta
                </a>
            </div>-->

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">&iquest;Has Olvidado Tu Contrase&ntilde;a?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Introduzca su direcci&oacute;n de correo electr&oacute;nico a continuaci&oacute;n para restablecer la contrase&ntilde;a.</p>
                          <input type="text" name="emails" placeholder="Escriba su Correo Electr&eacute;nico" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                          <button class="btn btn-success" type="button">Enviar</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>
    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>
</html>
