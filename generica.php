<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>


		<?php include ('include/menu.php') ?>

		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="col-xs-12">
							<h1 class="titulo_pagina">título de página (menú)</h1>
							<div id="redes_fixed" data-spy="affix" class="affix hidden-xs">
								<p>Compartir:</p>
								<?php include('include/compartir.php') ?>
							</div>
							
							<div class="casa_verde_header">
								<img src="img/header_casas_01.png" alt="" class="img-responsive">
							</div>
							<div class="casa_sombra_header">
								<img src="img/header_casas_03.png" alt="" class="img-responsive">
							</div>
							<div class="edificio_gris_header">
								<img src="img/header_casas_02.png" alt="" class="img-responsive">
							</div>
							<div class="casa_naranja_header">
								<img src="img/header_casas_04.png" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		


		<div class="contenido detalle container-fluid">

			<div class="row">
				<div class="container">
					<div class="centrado col-xs-10 col-xs-offset-1">
						<div class="resumen">
							<div class="header">
								<div class="fecha">
									<span>09</span>
									<span>10</span>
									<span>2014</span>
								</div>
								<div class="compartir_post">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Compartir <span class="btn_compartir"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Facebook</a></li>
											<li><a href="#">Twitter</a></li>
										</ul>
									</li>
								</div>
							</div>
							<h1 class="titulo_resumen col-xs-12">fotos destacadas  (h3) títulos</h1>
							<img class="fondo img-responsive" src="image/ejfotovisual.jpg" alt="">
							<div class="col-xs-12 info_detalle">
								<p class="col-xs-12 col-sm-8">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
								<div class="col-xs-12 col-sm-4 btn_info " href="">
									<a href="" class="icon_red">Link externo</a>	
								</div>
							</div>
						</div>
						<h1>h1 titulos principales</h1>
						<h2>h2 subtitulos</h2>
						<h3>(h3) título de las fotos destacadas</h3>
						<p>Tamaño del párrafo, </p>
						<p><span>p span ( para textos más pequeños)</span></p>

						<h2>titulo lista</h2>
						<ul>
							<li>
								<p>4 edificios de 5, 6 y 7 pisos con departamentos desde 218 m2 más terrazas con espectacular vista.</p>
							</li>
							<li>
								<p>Arquitectura de vanguardia, diseñada por los arquitectos Matías González y Alfredo Fernández, las cuales integran de forma activa la naturaleza y paisajismo de Juan Grimm y Carol Krämer.</p>
							</li>
							<li>
								<p>Finos detalles y materiales nobles son utilizados para los muebles de interior encargados al destacado diseñador Orlando Gatica.</p>
							</li>
							<li>
								<p>Arquitectura de vanguardia, diseñada por los arquitectos Matías González y Alfredo Fernández, las cuales integran de forma activa la naturaleza y paisajismo de Juan Grimm y Carol Krämer.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<?php include ('include/footer.php') ?>

	</body>
</html>
