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
    <link href="../matri-landingpage/img/unah10.png" rel="icon">
		<link href="/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				DIPP-unah<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../matri-landingpage/img/logo-unah-blanco.png" style="width:70%" alt="UserIcon">
					<figcaption class="text-center text-titles">Sistema de Matrícula</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<!--
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					-->
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i> Cerrar sesión
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="homeTeacher.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-assignment zmdi-hc-fw"></i> Calificaciones <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../matri-docente/docentesregistro.php"><i class="zmdi zmdi-badge-check zmdi-hc-fw"></i>Agregar notas</a>
						</li>
						<!--
						<li>
							<a href="academicHis.html"><i class="zmdi zmdi-assignment-check zmdi-hc-fw"></i> Historial Académico </a>
						</li>
						<li>
							<a href="evaTeacher.html"><i class="zmdi zmdi-thumb-down zmdi-hc-fw"></i>Evaluación docente</a>
						</li>
						
						<li>
							<a href=""><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Sección</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-font zmdi-hc-fw"></i> Aula</a>
						</li>
						-->
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> Secciones <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
				
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-collection-plus zmdi-hc-fw"></i> Lista Estudiantes </a>
						</li>
						
					</ul>
					
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Cambia tú contraseña<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href=""><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Acceso al sistema</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-email zmdi-hc-fw"></i> Correo institucional</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
	</section>

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
		
            <!-- Inicio prueba -->
            <br>
            <br>
            <center> <h1><b>Registro de calificaciones </b> </h1></center>
            <br>
            

			<div class="modal-body">
			<input type="text" class="material-control" placeholder="Alumno" id="nombreAlumno" required="required" maxlength="50" data-toggle="tooltip" data-placement="top" title="Id carrera">
      <br>
      <input type="text" class="material-control" placeholder="Numero de Cuenta" id="numeroAlumno" required="required" maxlength="50" data-toggle="tooltip" data-placement="top" title="Id carrera">
      <br>
      <input type="text" class="material-control" placeholder="Asignatura" id="asignaturaAlumno" required="required"  maxlength="50" data-toggle="tooltip" data-placement="top" title="Carrera">
      <br>
      <input type="number" min="0" max="100" class="material-control" placeholder="Calificacion" id="caliAlumno" required="required" maxlength="3" data-toggle="tooltip" data-placement="top" title="codigo alterno">
			
      </div>
       <br>
      <div class="modal-footer">
			  <center><button type="button" class="btn btn-default" id="btn-registrarCalificaciones" >Registrar Calificación</button>
        </center>		
	</div>
            
            <!-- Fin prueba -->

		  <!--  <div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Cantidad de secciones
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-assignment"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">3</p>
					<small>Secciones</small>
				</div>
			</article>


			
			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Docentes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">200</p>
					<small>Registrados</small>
				</div>
			</article>
		-->
			<!--  <article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estudiantes
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-accounts"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">90</p>
					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Representative
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">70</p>
					<small>Register</small>
				</div>
			</article>-->
		<!-- </div> -->
		<!--<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">System <small>TimeLine</small></h1>
			</div>
			


		</div>
	</section>

	<! Notifications area -->
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