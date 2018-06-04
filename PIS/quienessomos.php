<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/quienessomos.css">
 	
 	<script src="js/jquery.js"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>


	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider({
			effect: 'fade',
			animSpeed: 800,
			pauseTime: 2000,
			});
		});
	</script>
</head>
<body>
	<header>
 		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header1">
 			<div class="container">
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
 						<span class="sr-only">Desplegar barra</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 					</button>
 					<a href="index.php" class="navbar-brand" >Liceo Maipú</a>
 				</div>
 				<div class="collapse navbar-collapse" id="navegacion">
 					<ul class="nav navbar-nav navbar-right">
 						<li class="active"><a href="index.php">Inicio</a></li>
 						<li ><a href="quienessomos.php">¿Quiénes Somos?</a></li>
 						<li ><a href="vision.php">Visión</a></li>
 						<li ><a href="index.php">Ubicación</a></li>
 						<li ><a href="index.php"><img src="img/img5.png" id="img1"></a></li>
 					</ul>
 					
 					
	 				</div>
 				</div>
 			</div>
 		</nav>
 	</header>
 	<div class="container">
 		<div id="slider">
 			<img src="img/img5.jpg" alt="">
 		</div>
 	</div>
 	
	
 	<div class="container-fluid text-center">
 		

	<div class="container">    
	  <div class="row content">
	    <div class="col-sm-10 text-left" id="hola"> 
	      <h1>Nuestra Historia</h1>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	      <hr>
	      <h3>Test</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat laboriosam rem corporis! Odit fuga reiciendis quibusdam magnam maxime, doloribus, alias. Aliquam adipisci voluptates dolorem perferendis quos, doloremque expedita veritatis nulla.</p>
	    </div>
	    <div class="col-sm-2 sidenav">
	      <div class="well">
	        <p>ADS</p>
	      </div>
	      <div class="well">
	        <p>ADS</p>
	      </div>
	    </div>
	  </div>
	</div>

</div>


<footer class="container-fluid text-center container">
  <p>Footer Text</p>
</footer>
</body>
</html>