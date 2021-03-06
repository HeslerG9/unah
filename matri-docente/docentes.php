<?php 
    session_start();  
    if (!isset($_SESSION["NumDoc"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio Docentes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
    <link rel="stylesheet" href="../matri-landingpage/css/main.css">
    <link rel="stylesheet" href="../matri-landingpage/css/style-matri.css">
    <link href="../../matri-landingpage/img/unah10.png" rel="icon">
		<link href="/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
</head>
<body>

<?php
    include("sidebar.html")
    ?>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">1</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<!--<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>-->
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
				<div class="page-header">
				<h1 class="text-titles">Servicios al Docente<small></small></h1>
				</div>
			</div>

            <!-- inicio prueba -->
            <div id="courses" class="section" style="padding-top:50px">

    <!-- container -->
    <div class="container" style="padding-bottom:300 px !important">

        <!-- row -->
        <div class="row">
            <div  class="section-header text-center col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
               <!--  <h1 class="primera">Servicios Al Docente</h1> -->
                <h2><strong> Bienvenido:</strong> <?php echo $_SESSION["NombreDoc"];?>&nbsp<?php echo $_SESSION["ApellidoDoc"];?></h2>
                <h2><strong> Docente de la Carrera:</strong>  <?php echo $_SESSION["CarreraDoc"];?></h2>
                <h3> Tu cuenta de correo electrónico institucional es: <strong><?php echo $_SESSION["CorreoDoc"];?></strong> <br>
                </h3>
                <h4> Su número de docente es  <strong><?php echo $_SESSION["NumDoc"];?></strong> </h4> 
                
                <p class="lead"></p> 


                
            </div>
        
      <div>
          <br>
        <img src="../matri-landingpage/img/avatar.png" class= "col-md-4 col-lg-4 col-xl-4 hidden-xs
        hidden-sm"  style="width:18%;border-radius:10%;border-color:blue" alt="...">
    </div>
    </div>
<br>
        <div class="list-group" >
            <button type="button" class="list-group-item list-group-item-action active">
              Asignaturas Asignadas
            </button>
            <button type="button" class="list-group-item list-group-item-action">Programación Orientada a Objetos</button>
            <button type="button" class="list-group-item list-group-item-action">Programación 2</button>
            <button type="button" class="list-group-item list-group-item-action">Sistemas Expertos</button>
            <button type="button" class="list-group-item list-group-item-action">Bases de Datos 1 </button>
          </div>

        </div>
    </div>

	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    
				
			  	</div>
			  
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Titulo</h4>
				      	<p class="list-group-item-text">cambio de clave</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Pagos</h4>
				      	<p class="list-group-item-text">Pago pendiete</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	
	<!--====== Scripts -->
	<script src="../matri-landingpage/js/jquery-3.1.1.min.js"></script>
	<script src="../matri-landingpage/js/sweetalert2.min.js"></script>
	<script src="../matri-landingpage/js/bootstrap.min.js"></script>
	<script src="../matri-landingpage/js/material.min.js"></script>
	<script src="../matri-landingpage/js/ripples.min.js"></script>
	<script src="../matri-landingpage/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../matri-landingpage/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>