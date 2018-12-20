<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-419">  <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 ie7" lang="es-419"><![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8" lang="es-419"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js " lang="es-419">         <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Index</title>

	<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://use.typekit.net/jdo8zym.css">
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/accordion.js"></script>
	<script src="js/datepicker.js"></script>
	<script src="js/plusminus.js"></script>
	<script src="js/sliderResponsive.js"></script>
	
	<script src="js/i18n/datepicker.en.js"></script>
	<script>
		// Select today
		$('.datepicker').datepicker({
			todayButton: new Date()
		})

	</script>

	<?php
	   $pageName = basename($_SERVER['PHP_SELF']); $withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $pageName);
	?>
	
</head>



<body class="<?php echo $withoutExt; ?>">


	<header class="main-header">

		<div class="logo"><a href="#"><img src="images/content/kidzania-logo.svg" alt=""></a></div>

		<nav id="main_nav">
			<ul>
				<li><a href="#" class="login">Iniciar Sesión</a></li>
				<li><a href="#" class="create-account">Crear Cuenta</a></li>
				<li><a href="#" class="login-fb">Ingresar con Facebook <img src="images/content/facebook.svg" alt="" /></a></li>
			</ul>

		</nav>

	</header>
