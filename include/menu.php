	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_principal">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="img/mediocirculo_blanco.png" alt="" class="soporte">
					<img src="img/logo_sich.png" alt="" class="marca">
				</a>

				<button type="button" class="navbar-toggle collapsed compartir" data-toggle="collapse" data-target="#compartir">
					<span class="sr-only">Toggle navigation</span>
					<span class="glyphicon glyphicon-share btn-lg"></span>
				</button>
			</div>
			<div class="collapse" id="compartir">
				<ul class="nav navbar-nav navbar-right  hidden-lg">
					<li>
						<div class="fb-share-button" data-href="http://conferenciaciudad.cl/"></div>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=499601146833008&version=v2.0"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
					</li>
					<li>
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://conferenciaciudad.cl/" data-lang="es" data-count="none">Twittear</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						
					</li>
					<li>
						<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: es_ES</script>
						<script type="IN/Share" data-url="http://conferenciaciudad.cl/"></script>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="menu_principal">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="quienes_somos.php" class="dropdown-toggle clickable" data-toggle="dropdown" data-hover="dropdown">Quienes Somos</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Cómo llegar</a></li>
							<li><a href="#">Plano de la Feria</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="expositores.php" class="dropdown-toggle clickable" data-toggle="dropdown" data-hover="dropdown">Expositores</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="expositores.php">Proyectos Inmobiliarios</a></li>
							<li><a href="#">Financiamiento</a></li>
							<li><a href="#">Decoración</a></li>
							<li><a href="#">Otros</a></li>
						</ul>
					</li>
					<li><a href="#">Actividades</a></li>
					<li><a href="#">Noticias</a></li>
					<li><a href="#">Servicios</a></li>
					<li><a href="#">Contacto</a></li>			
				</ul>
			</div>
		</div>
	</nav>
