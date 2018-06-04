<?php 



 ?>


 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Liceo Maipú</title>
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/ubicacion.css">
 	
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
 						<li ><a href="index.php">Inicio</a></li>
 						<li ><a href="quienessomos.php">¿Quiénes Somos?</a></li>
 						<li ><a href="vision.php">Visión</a></li>
 						<li class="active"><a href="ubicacion.php">Ubicación</a></li>
 						<li ><a href="index.php"><img src="img/img5.png" id="img1"></a></li>
 					</ul>
 					
 					
	 				</div>
 				</div>
 			</div>
 		</nav>
 	</header>

 	
 	
	
 	<div class="container-fluid" id="mid">
		<div class="container">    
		  <div class="row content" id="well">
		    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 " id="hola"> 
		    	<div class="posteo">
		    		<h1>Ubicacion</h1>
				    <hr class="hr1">
				    <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!4v1526960088625!6m8!1m7!1sNo6AYnfuTrj2eLIdu8bNuw!2m2!1d-33.51093826178313!2d-70.72482165308003!3f94.18567440974437!4f-5.041652265904332!5f0.7820865974627469" width="600" height="450" align="middle" frameborder="0" style="border:0" allowfullscreen></iframe>
		    	</div>
		    	<div class="posteo">
		    		<a href="quienessomos.php"><h1>Direccion</h1></a>
				    <hr class="hr1">
				    <ul>Camino a Melipilla 8720</ul>
				    <ul>Maipú, Santiago</ul>
				    <ul>Fonos: +56 2 2583 6570 | +56 2 2583 6571</ul>
				    <ul>E-mail: contacto@liceomaipu.cl</ul>
		    	</div>
		    	
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidenav">
		      <div class="well">
		        <div class="well1">
		        	<h4 id="h41">Bingo</h4>
		        	<p>Bingo a beneficio a realizarse el 20 de Agosto.</p>
		        	<a href="">Leer más.</a>
		        </div>
		        <div class="well2">
		        </div>
		      </div>
		      <div class="well">
		        <div class="well1">
		        	<h4 id="h41">Bingo</h4>
		        	<p>Bingo a beneficio a realizarse el 20 de Agosto.</p>
		        	<a href="">Leer más.</a>
		        </div>
		        <div class="well2">
		        </div>
		      </div>
		      <div class="well">
		        <div class="well1">
		        	<h4 id="h41">Bingo</h4>
		        	<p>Bingo a beneficio a realizarse el 20 de Agosto.</p>
		        	<a href="">Leer más.</a>
		        </div>
		        <div class="well2">
		        </div>
		      </div>
		      
		    </div>
		  </div>
		</div>

	</div>




<footer class="container-fluid text-center ">
  <p>Footer Text</p>
</footer>
 	
 </body>
 </html>