<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema de matrícula</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../matri-landingpage/css/main.css">
	<link href="../matri-landingpage/img/unah10.png" rel="icon">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				UNAH<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../matri-landingpage/assets/img/unah10.png" alt="UserIcon">
					<figcaption class="text-center text-titles">Sistema de Matrícula</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					
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
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="career.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Carreras</a>
						</li>
						<li>
							<a href="section.html"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i> Sección</a>
						</li>
						<li>
							<a href="aula.html"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Aula</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Registrar usuarios<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Empleado</a>
						</li>
						<li>
							<a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Docente</a>
						</li>
						<li>
							<a href="student.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiante</a>
						</li>
						<li>
							<a href="representative.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Personal administrativo</a>
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
							<a href=""><i class="zmdi zmdi-money zmdi-hc-fw"></i> Correo institucional</a>
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
						<span class="badge">2</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de matrícula <small>   Administración de docentes</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="admin.html">Administradores</a></li>
                <li role="presentation"  class="active"><a href="teacher.html">Docentes</a></li>
                <li role="presentation"><a href="student.html">Estudiantes</a></li>
                <li role="presentation"><a href="personal.html">Personal administrativo</a></li>
            </ul>
        </div>
		<div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../matri-landingpage/assets/img/user.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    En esta sección se puede ver la lista de docentes registrdos
                </div>
            </div>
		</div>
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="teacher.html">Nuevo docente</a></li>
                      <li class="active">Listado de docentes</li>
                    </ol>
                </div>
            </div>
        </div>
		<div class="container-fluid" style="margin: 0 0 50px 0;">
                <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                    <div class="group-material">
                        <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar docente" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                        <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                            <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                        </button>
                    </div>
                </form>
                <h2 class="text-center all-tittles" style="margin: 25px 0; clear: both;">Facultades</h2>
                <ul class="list-unstyled text-center list-catalog-container">
                    <li class="list-catalog">Ingeniería</li>
                    <li class="list-catalog">Ciencias</li>
                    <li class="list-catalog">Ciencias Económicas</li>
                    <!--<li class="list-catalog"></li>-->
                </ul>
            </div>
            <div class="container-fluid">
                <h2 class="text-center all-tittles">Listado de docentes</h2>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                            <div class="div-table-cell" style="width: 6%;">#Empleado</div>
                            <div class="div-table-cell" style="width: 9%;">#Identidad</div>
                            <div class="div-table-cell" style="width: 12%;">Nombres</div>
                            <div class="div-table-cell" style="width: 12%;">Apellidos</div>
                            <div class="div-table-cell" style="width: 9%;">Email</div>
                            <div class="div-table-cell" style="width: 9%;">Telefono</div>
                            <div class="div-table-cell" style="width: 11%;">Fecha nacimiento</div>
                            <div class="div-table-cell" style="width: 9%;">campus</div>
                            <div class="div-table-cell" style="width: 9%;">Sección</div>
                            <div class="div-table-cell" style="width: 6%;">Título</div>
                            <div class="div-table-cell" style="width: 6%;">Eliminar</div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list">
                            <div class="div-table-cell" style="width: 6%;">#Cuenta</div>
                            <div class="div-table-cell" style="width: 9%;">#Identidad</div>
                            <div class="div-table-cell" style="width: 12%;">Nombres</div>
                            <div class="div-table-cell" style="width: 12%;">Apellidos</div>
                            <div class="div-table-cell" style="width: 9%;">Email</div>
                            <div class="div-table-cell" style="width: 9%;">Telefono</div>
                            <div class="div-table-cell" style="width: 11%;">Fecha nacimiento</div>
                            <div class="div-table-cell" style="width: 9%;">campus</div>
							<div class="div-table-cell" style="width: 9%;">Sección</div>
							<div class="div-table-cell" style="width: 6%;">Título</div>
                            <div class="div-table-cell" style="width: 6%;">
                                <button class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#!">«</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">»</a></li>
              </ul>
            </div>
	
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificationes <i class="zmdi zmdi-close btn-Notifications-area"></i>
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