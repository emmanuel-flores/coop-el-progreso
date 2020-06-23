<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
	<title>El Progreso</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen|Contrail+One|Libre+Baskerville&display=swap">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/noticias.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="body">
	<nav class="navbar navbar-fixed-top">
	  	<div class="container-fluid">
	  		
			<!-- Brand and toggle get grouped for better mobile display -->
		    <button type="button" class="navbar-toggle btn" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="true" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
		    <div class="navbar-header">
	      		<a id="nav-brand" class="navbar-brand">
		      		<img class="brand-img" alt="Brand" src="assets/images/logo_coop_brand.png">
		      	</a>
		    </div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-collapse">
		     	<ul id="navbar" class="nav navbar-nav">
			        <li @yield('inicio')><a href="/">INICIO<span class="sr-only">(current)</span></a></li>
			        <li @yield('noticias')><a href="/noticias">NOTICIAS</a></li>
			        <li class="dropdown {@yield('secciones')}">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SECCIONES <span class="glyphicon glyphicon-menu-down"></span></a>
			          	<ul id="dropdown-menu" class="dropdown-menu">
				            <li><a href="/alimeto">Alimento balanceado certero</a></li>
				            <li><a href="/seguros">La Segunda/ACA Salud/Coovaeco turismo</a></li>
				            <li><a href="/ferreteria">Ferreteria</a></li>
				            <li><a href="/agronomia">Agronomia</a></li>
				            <li><a href="/miel">Miel</a></li>
				            <li><a href="/veterinaria">Veterinaria</a></li>
				            <li><a href="/hacienda">Hacienda</a></li>
				            <li><a href="/cereales">Cereales</a></li>
				            <li><a href="/autoservicio">Autoservicio</a></li>
				            <li><a href="/ypf">YPF</a></li>
			          	</ul>
			        </li>
			        <li @yield('mercado')><a href="#">MERCADO</a></li>
			        <li @yield('cuenta')><a href="#">CUENTA</a></li>
			        <li @yield('revista')><a href="#">REVISTA</a></li>
			        <li class="dropdown {@yield('nosotros')}">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS <span class="glyphicon glyphicon-menu-down"></span></a>
			          	<ul id="dropdown-menu" class="dropdown-menu">
				            <li><a href="/historia">Historia</a></li>
				            <li><a href="#">Solicitud de empleo</a></li>
				            <li><a href="#">Contacto</a></li>
			          	</ul>
			        </li>
		      	</ul>
		    </div>
		    <!-- /.navbar-collapse -->
	  		
	  	</div>
	  	<!-- /.container-fluid -->
	</nav>
	@yield('content')
		<footer class="footer">
			<img class="img-responsive center-block footer-img" src="assets/images/logo_coop_footer.png">
			<p>Florida 692 - Henderson, Bs. As.</p>
			<p>(02314) 451500</p>
			<p>info@elprogresocoop.com.ar</p>
			<p class="cr">Copyright © 2020 Cooperativa Agropecuaria El Progreso de Henderson LTDA</p>
		</footer>
	<script type="assets/js/script.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
</body>
</html>