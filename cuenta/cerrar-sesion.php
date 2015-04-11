<?php session_start();
require_once('../sistema/configuracion.php');
$account->AccountLoginQuery();
$account->AccountLoginCheck();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Cerrar Sesi&oacute;n | <?php echo TITULO ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css?1" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="lock-screen" onload="startTime()">

    <div class="lock-wrapper">

        <div id="time"></div>

        <div class="lock-box text-center">
            <div class="lock-name"><?php echo $profile['nombre']." ".$profile['apellidos']; ?></div>
            <img src="images/lock_thumb.jpg" alt="lock avatar"/>
            <div class="lock-pwd">
				<form role="form" class="form-inline">
					<div class="form-group">
						<input type="password" placeholder="Cerrando Sesi&oacute;n" id="exampleInputPassword2" class="form-control lock-input">
						</button>
					</div>
				</form>
				<?php
				$enLinea = $connect->Connect()->query("UPDATE `account` SET `enLinea`='0' WHERE `Id`='".$profile['Id']."'");
				session_unset(); session_destroy();
				?>
				<meta http-equiv="refresh" content="4;url=<?php echo URL_CUENTA ?>login"/>
			</div>
        </div>
    </div>
    <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
</body>
</html>